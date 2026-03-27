// extra gemaakt met ai voor interactive cart
(function(){
  const addButtons = document.querySelectorAll('.add-to-cart');
  const cartKey = 'simpleCart';
  let cart = JSON.parse(localStorage.getItem(cartKey) || '[]');

  function save() { localStorage.setItem(cartKey, JSON.stringify(cart)); }

  function renderCart(){
    const list = document.getElementById('cartItems');
    const totalEl = document.getElementById('cartTotal');
    if(!list || !totalEl) return;
    list.innerHTML = '';
    let total = 0;
    cart.forEach((item, idx) => {
      const li = document.createElement('li');
      li.textContent = item.name + ' - €' + item.price.toFixed(2);
      const remove = document.createElement('button');
      remove.textContent = 'X';
      remove.style.marginLeft = '8px';
      remove.onclick = () => { cart.splice(idx,1); save(); renderCart(); };
      li.appendChild(remove);
      list.appendChild(li);
      total += item.price;
    });
    totalEl.textContent = 'Total: €' + total.toFixed(2);
  }

  function addToCart(name, price){
    cart.push({name, price});
    save();
    renderCart();
  }

  // Attach click handlers
  addButtons.forEach(btn => {
    btn.addEventListener('click', function(){
      const name = this.dataset.name || this.closest('.menu-item')?.querySelector('h3, h4')?.innerText || 'Item';
      const price = parseFloat(this.dataset.price) || 0;
      addToCart(name, price);
    });
  });

  // Checkout button
  const checkout = document.getElementById('checkoutBtn');
  if(checkout){
    checkout.addEventListener('click', function(){
      if(cart.length === 0){ alert('you want to buy nothing mmmmhhhhhh : |  .'); return; }
      // Simple behaviour: show summary then clear
      const names = cart.map(i => i.name + ' €' + i.price.toFixed(2)).join('\n');
      const total = cart.reduce((s,i)=>s+i.price,0).toFixed(2);
      alert('youre order:\n' + names + '\n\nTotal: €' + total + '\n\ thanks! & enjoy your meal ;)');
      cart = []; save(); renderCart();
    });
  }

  // Initial render
  document.addEventListener('DOMContentLoaded', renderCart);
})();
