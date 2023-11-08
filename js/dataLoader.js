var xhr = new XMLHttpRequest();

xhr.onreadystatechange = function() {
    if (xhr.readyState === 4) {
        if (xhr.status === 200) {
            console.log("Data JSON berhasil diambil.");
            var data = JSON.parse(xhr.responseText);
            var container = document.getElementById('houses-container');

            function updateHouses() {
                var searchQuery = searchInput.value.toLowerCase();

                var filteredHouses = data.filter(function(house) {
                    return house.name.toLowerCase().includes(searchQuery);
                });

                container.innerHTML = '';

                filteredHouses.forEach(function(house) {
                    var card = document.createElement('div');
                    card.className = 'bg-white p-4 shadow-lg rounded';
                    card.innerHTML = `
                    <img src="${house.image}" class="w-full">
                    <p class=" left-2 top-2 p-1 bg-gray-700/70 text-gray-200 text-sm flex items-center gap-1">
                    <svg class="invert" width="18px" height="18px" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M5 9.5C5 6.09371 8.00993 3 12 3C15.9901 3 19 6.09371 19 9.5C19 11.6449 17.6877 14.0406 15.9606 16.2611C14.5957 18.016 13.0773 19.5329 12 20.5944C10.9227 19.5329 9.40427 18.016 8.03935 16.2611C6.31229 14.0406 5 11.6449 5 9.5ZM12 1C6.99007 1 3 4.90629 3 9.5C3 12.3551 4.68771 15.2094 6.46065 17.4889C7.99487 19.4615 9.7194 21.1574 10.7973 22.2173C10.9831 22.4001 11.1498 22.564 11.2929 22.7071C11.4804 22.8946 11.7348 23 12 23C12.2652 23 12.5196 22.8946 12.7071 22.7071C12.8502 22.564 13.0169 22.4001 13.2027 22.2174L13.2028 22.2173C14.2806 21.1573 16.0051 19.4615 17.5394 17.4889C19.3123 15.2094 21 12.3551 21 9.5C21 4.90629 17.0099 1 12 1ZM12 12.5C13.3807 12.5 14.5 11.3807 14.5 10C14.5 8.61929 13.3807 7.5 12 7.5C10.6193 7.5 9.5 8.61929 9.5 10C9.5 11.3807 10.6193 12.5 12 12.5Z"
                            fill="#000000"></path>
                    </g>
                    </svg>${house.location}
                    </p>
                    <div>
                        <div class="flex items-center justify-between p-4 my-6">
                            <h2 class="text-2xl font-semibold">${house.name}</h2>
                            <p class="text-gray-500">Rp ${house.price}</p>
                        </div>
                    </div>
                    <div class="flex flex-row items-center justify-between">
                        <ol class="flex flex-row gap-2 ml-4 my-4">
                            <li><p class="rounded-sm bg-blue-100 p-2 text-blue-600 text-xs font-semibold">${house.type}</p></li>
                            <li><p class="rounded-sm bg-green-100 p-2 text-green-600 text-xs font-semibold">${house.bedrooms} Kamar</p></li>
                            <li><p class="rounded-sm bg-yellow-100 p-2 text-yellow-600 text-xs font-semibold">${house.landSize} m²</p></li>
                        </ol>

                        <div class="flex items-center justify-end">
                            <button class="p-4 saturate-0 hover:saturate-100 duration-3000 bg-red-500 text-white font-semibold rounded-full hover:bg-red-600"><svg fill="#000000" width="18px" height="18px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M20.5,4.609A5.811,5.811,0,0,0,16,2.5a5.75,5.75,0,0,0-4,1.455A5.75,5.75,0,0,0,8,2.5,5.811,5.811,0,0,0,3.5,4.609c-.953,1.156-1.95,3.249-1.289,6.66,1.055,5.447,8.966,9.917,9.3,10.1a1,1,0,0,0,.974,0c.336-.187,8.247-4.657,9.3-10.1C22.45,7.858,21.453,5.765,20.5,4.609Zm-.674,6.28C19.08,14.74,13.658,18.322,12,19.34c-2.336-1.41-7.142-4.95-7.821-8.451-.513-2.646.189-4.183.869-5.007A3.819,3.819,0,0,1,8,4.5a3.493,3.493,0,0,1,3.115,1.469,1.005,1.005,0,0,0,1.76.011A3.489,3.489,0,0,1,16,4.5a3.819,3.819,0,0,1,2.959,1.382C19.637,6.706,20.339,8.243,19.826,10.889Z"></path></g></svg></button>
                        </div>
                    </div>
                `;
                    container.appendChild(card);
                });
            }

            var searchInput = document.querySelector('.relative input[type="text"]');
            searchInput.addEventListener('input', updateHouses);
            updateHouses();
        } else {
            console.error('Gagal mengambil data JSON. Status: ' + xhr.status);
        }
    }
};

xhr.open('GET', '../data/houses.json', true);
xhr.send();
