<button id="connectBtn">Connect BSC Wallet</button>

<script src="https://unpkg.com/@walletconnect/ethereum-provider@2.11.1/dist/index.umd.min.js"></script>
<script src="https://unpkg.com/web3modal@3.5.1/dist/index.umd.js"></script>
<script src="https://unpkg.com/ethers@6.7.0/dist/ethers.umd.min.js"></script>

<script>
(async () => {
  const projectId = "6ffb8e589b4d91540161e2a8a07068d1";

  const BSC_CHAIN = {
    chainId: "0x38",
    chainName: "Binance Smart Chain",
    nativeCurrency: { name: "BNB", symbol: "BNB", decimals: 18 },
    rpcUrls: ["https://bsc-dataseed.binance.org/"],
    blockExplorerUrls: ["https://bscscan.com"]
  };

  async function getProvider() {
    if (window.ethereum) {
      return window.ethereum;
    } else {
      return await window.WalletConnectEthereumProvider.init({
        projectId,
        chains: [56],
        showQrModal: true,
      });
    }
  }

  async function connectWallet() {
    try {
      const provider = await getProvider();
      const accounts = await provider.request({ method: 'eth_requestAccounts' });

      try {
        await provider.request({
          method: 'wallet_switchEthereumChain',
          params: [{ chainId: BSC_CHAIN.chainId }]
        });
      } catch (err) {
        if (err.code === 4902) {
          await provider.request({
            method: 'wallet_addEthereumChain',
            params: [BSC_CHAIN]
          });
        } else {
          throw err;
        }
      }

      const ethersProvider = new ethers.BrowserProvider(provider);
      const signer = await ethersProvider.getSigner();
      alert("Connected: " + await signer.getAddress());

    } catch (error) {
      console.error(error);
    }
  }

  document.getElementById("connectBtn").addEventListener("click", connectWallet);
})();
</script>
