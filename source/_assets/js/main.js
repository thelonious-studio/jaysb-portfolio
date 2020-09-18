import 'sharer.js'
import './highlight'

const outdated = document.querySelector('[data-phpdate]')

if (outdated) {
  const phpdate = outdated.dataset.phpdate
  if (((Date.now() / 1000 - phpdate) / 86400) < 365) {
    outdated.style.display = 'none'
  }
}

