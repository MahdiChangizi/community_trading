require("dotenv").config();

const express = require("express");
const { ethers } = require("ethers");

const app = express();
app.use(express.json());

const provider = new ethers.JsonRpcProvider(process.env.RPC_URL);

const wallet = new ethers.Wallet(
    process.env.PRIVATE_KEY,
    provider
);

const usdtAbi = [
    "function transfer(address to, uint amount) public returns(bool)",
    "function decimals() view returns(uint8)"
];

const usdt = new ethers.Contract(
    process.env.USDT_ADDRESS,
    usdtAbi,
    wallet
);


app.post("/send", async (req, res) => {

    try {

        const { to, amount } = req.body;

        if (!to || !amount) {
            return res.status(400).json({
                error: "to and amount are required"
            });
        }

        if (!ethers.isAddress(to)) {
            return res.status(400).json({
                error: "Invalid wallet address"
            });
        }

        const decimals = await usdt.decimals();

        const value = ethers.parseUnits(
            amount.toString(),
            decimals
        );

        const tx = await usdt.transfer(to, value);

        await tx.wait();

        res.json({
            success: true,
            hash: tx.hash
        });

    } catch (e) {

        res.status(500).json({
            error: e.reason || e.message
        });

    }

});

app.listen(process.env.PORT, () => {
    console.log("Server started on port", process.env.PORT);
});