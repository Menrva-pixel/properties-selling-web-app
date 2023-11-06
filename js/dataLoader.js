var xhr = new XMLHttpRequest();
        
  xhr.onreadystatechange = function() {
      if (xhr.readyState === 4) {
          if (xhr.status === 200) {
              console.log("Data JSON berhasil diambil."); 
              var data = JSON.parse(xhr.responseText);
              var container = document.getElementById('houses-container');
              
              data.forEach(function(house) {
                  var card = document.createElement('div');
                  card.className = 'bg-white p-4 shadow-lg rounded';
                  card.innerHTML = '<h2 class="text-xl font-semibold">' + house.name + '</h2>' +
                                  '<p class="text-gray-500">' + house.location + '</p>' +
                                  '<p class="text-green-500 font-bold mt-2">$' + house.price + '</p>' +
                                  '<img src="' + house.image + '" alt="' + house.name + '" class="mt-4">';
                  container.appendChild(card);
              });
          } else {
              console.error('Gagal mengambil data JSON. Status: ' + xhr.status); 
          }
      }
  };

  xhr.open('GET', './data/houses.json', true);
  xhr.send();