function scheduleClick(){
    document.getElementById('schedule').addEventListener('click', function() {
      document.querySelector('.bg-modal').style.display='flex';
    });
  }
  function closeClick(){
    document.getElementById('close').addEventListener('click', function() {
      document.querySelector('.bg-modal').style.display='none';
      document.querySelector('.brand').value='';
      document.querySelector('.productlabel').innerHTML='';
    });
  }
  function refClick(){
    document.getElementById('reficon').addEventListener('click', function() {
      document.querySelector('.selectbrands').style.display='flex';
      document.querySelector('.product').value='Refrigerator';
      document.querySelector('.productlabel').innerHTML='Refrigerator';
    });
  }
  function airconClick(){
    document.getElementById('airconicon').addEventListener('click', function() {
      document.querySelector('.product').value='Aircon';
      document.querySelector('.productlabel').innerHTML='Aircon';
    });
  }
  function washingClick(){
    document.getElementById('washingicon').addEventListener('click', function() {
      document.querySelector('.product').value='Washing Machine';
      document.querySelector('.productlabel').innerHTML='Washing Machine';
    });
  }
  