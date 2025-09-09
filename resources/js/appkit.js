import { createAppKit } from '@reown/appkit'
import { mainnet, arbitrum } from '@reown/appkit/networks'
import { WagmiAdapter } from '@reown/appkit-adapter-wagmi'

const projectId = '6ffb8e589b4d91540161e2a8a07068d1'

export const networks = [mainnet, arbitrum]

const wagmiAdapter = new WagmiAdapter({
  projectId,
  networks
})

const metadata = {
  name: 'AppKit',
  description: 'AppKit Example',
  url: window.location.origin,
  icons: ['https://avatars.githubusercontent.com/u/179229932']
}

const modal = createAppKit({
  adapters: [wagmiAdapter],
  networks,
  metadata,
  projectId,
  features: {
    analytics: true
  }
})

// دکمه‌ها رو وصل کن
document.addEventListener("DOMContentLoaded", () => {
  const openConnectModalBtn = document.getElementById('open-connect-modal')
  const openNetworkModalBtn = document.getElementById('open-network-modal')

  if (openConnectModalBtn) {
    openConnectModalBtn.addEventListener('click', () => modal.open())
  }
  if (openNetworkModalBtn) {
    openNetworkModalBtn.addEventListener('click', () => modal.open({ view: 'Networks' }))
  }
})

export default modal
