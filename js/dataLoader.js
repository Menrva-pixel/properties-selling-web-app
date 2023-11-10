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
                    <p class=" left-2 top-2 p-1 bg-gray-700/60 text-gray-200 text-sm flex items-center gap-1">
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
                        <div class="flex flex-col items-start justify-between p-4 my-6">
                            <h2 class="text-2xl font-semibold">${house.name}</h2>
                            <p class="text-gray-500 text-sm my-2">${house.address}</p>
                        </div>
                    </div>
                    <div class="flex flex-row items-center justify-between">
                        <ol class="flex flex-row gap-2 ml-4 my-4">
                            <li><p class="rounded-sm bg-blue-100 p-2 text-blue-600 text-xs font-semibold">${house.type}</p></li>
                            <li><p class="rounded-sm bg-green-100 p-2 text-green-600 text-xs font-semibold">${house.bedrooms} Kamar</p></li>
                            <li><p class="rounded-sm bg-yellow-100 p-2 text-yellow-600 text-xs font-semibold">${house.landSize} m²</p></li>
                        </ol>

                        <div class="flex flex-row">
                            <button class="m-2 hover:bg-blue-600 duration-300 ">
                            <a href="javascript:void(0);" class="flex gap-1 items-center bg-gray-200/70 p-2 rounded-sm text-xs md:text-sm text-gray-600 border border-gray-400/60"><svg width="14px" height="14px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 21.25C11.853 21.2514 11.7093 21.2059 11.59 21.12C11.29 20.93 4.25 16.2 4.25 10.45C4.25 8.39452 5.06652 6.42328 6.51992 4.96987C7.97333 3.51647 9.94457 2.69995 12 2.69995C14.0554 2.69995 16.0267 3.51647 17.4801 4.96987C18.9335 6.42328 19.75 8.39452 19.75 10.45C19.75 16.2 12.75 20.93 12.41 21.12C12.2907 21.2059 12.147 21.2514 12 21.25ZM12 4.24995C10.3494 4.24463 8.7642 4.89454 7.59238 6.05699C6.42056 7.21943 5.75794 8.79939 5.75 10.45C5.75 14.66 10.54 18.51 12 19.58C13.46 18.51 18.25 14.66 18.25 10.45C18.2421 8.79939 17.5794 7.21943 16.4076 6.05699C15.2358 4.89454 13.6506 4.24463 12 4.24995Z" fill="#000000"></path> <path d="M12 12.75C11.4561 12.75 10.9244 12.5887 10.4722 12.2865C10.0199 11.9844 9.66747 11.5549 9.45933 11.0524C9.25119 10.5499 9.19673 9.99695 9.30284 9.4635C9.40895 8.93006 9.67086 8.44005 10.0555 8.05546C10.4401 7.67086 10.9301 7.40895 11.4635 7.30284C11.997 7.19673 12.5499 7.25119 13.0524 7.45933C13.5549 7.66747 13.9844 8.01995 14.2865 8.47218C14.5887 8.92442 14.75 9.4561 14.75 10C14.75 10.7293 14.4603 11.4288 13.9445 11.9445C13.4288 12.4603 12.7293 12.75 12 12.75ZM12 8.75C11.7528 8.75 11.5111 8.82331 11.3055 8.96066C11.1 9.09802 10.9398 9.29324 10.8452 9.52165C10.7505 9.75005 10.7258 10.0014 10.774 10.2439C10.8223 10.4863 10.9413 10.7091 11.1161 10.8839C11.2909 11.0587 11.5137 11.1778 11.7561 11.226C11.9986 11.2742 12.2499 11.2495 12.4784 11.1549C12.7068 11.0602 12.902 10.9 13.0393 10.6945C13.1767 10.4889 13.25 10.2472 13.25 10C13.25 9.66848 13.1183 9.35054 12.8839 9.11612C12.6495 8.8817 12.3315 8.75 12 8.75Z" fill="#000000"></path> </g></svg>
                            Map</a>
                            </button>

                            <div class="flex items-center justify-end">
                                <button class="p-2 duration-300 bg-gray-200/70 text-white font-semibold rounded-sm border border-gray-400/60 hover:bg-red-600"><svg fill="#000000" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M20.5,4.609A5.811,5.811,0,0,0,16,2.5a5.75,5.75,0,0,0-4,1.455A5.75,5.75,0,0,0,8,2.5,5.811,5.811,0,0,0,3.5,4.609c-.953,1.156-1.95,3.249-1.289,6.66,1.055,5.447,8.966,9.917,9.3,10.1a1,1,0,0,0,.974,0c.336-.187,8.247-4.657,9.3-10.1C22.45,7.858,21.453,5.765,20.5,4.609Zm-.674,6.28C19.08,14.74,13.658,18.322,12,19.34c-2.336-1.41-7.142-4.95-7.821-8.451-.513-2.646.189-4.183.869-5.007A3.819,3.819,0,0,1,8,4.5a3.493,3.493,0,0,1,3.115,1.469,1.005,1.005,0,0,0,1.76.011A3.489,3.489,0,0,1,16,4.5a3.819,3.819,0,0,1,2.959,1.382C19.637,6.706,20.339,8.243,19.826,10.889Z"></path></g></svg></button>
                            </div>
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
