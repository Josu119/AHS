<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination with Images</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .container {
            display: flex;
            flex-direction: column;
            min-height: 20vh;
        }

        .image-container {
            flex-grow: 1;
            display: flex;
            justify-content: center; 
            align-items: center;
        }

        .pagination {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px; 
            position: sticky;
            top: 0; 
            background-color: transparent; 
            z-index: 1; 
            width: 100%;
        }
        
        .pagination button {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;
    /* font-size: 16px; */
    border: solid 1px;
    border-radius: 10px;
        }

        .pagination button:disabled {
            opacity: 0.5;
        }

        .pagination button.light-green {
            background-color: #5cb85c;
            color: white;
        }

        .pagination button.emphasized-red {
            background-color: #d9534f;
            color: white;
        }

        .pagination .text {
            margin: 0 10px;
        }

     
        #selectedDeskText {
            font-size: 24px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="pagination">
        <button id="prevBtn"><i class="fas fa-chevron-left"></i><span class="text"></span></button>
        <span id="selectedDeskText">Selected Desk: [here is the selected desk]</span> 
        <button id="nextBtn"><span class="text"></span><i class="fas fa-chevron-right"></i></button>
    </div>

    <div class="image-container">

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const images = [
            'images/finale.png',
            'images/1-3.png',
            'images/4-11.png',
            'images/12-19.png',
            'images/20,21.png',
            'images/22-25.png',
            'images/26-32.png',
            'images/33-54.png',
        ];
        
        const itemsPerPage = 1;
        let currentPage = 1;
        let selectedDesk = ''; 
        
        const imageContainer = document.querySelector('.image-container');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const selectedDeskText = document.getElementById('selectedDeskText');
        
        function displayImages() {
            const startIndex = (currentPage - 1) * itemsPerPage;
            const endIndex = startIndex + itemsPerPage;
            
            const displayedImages = images.slice(startIndex, endIndex);
            
            imageContainer.innerHTML = ''; 
            
            displayedImages.forEach(image => {
                const imgElement = document.createElement('img');
                imgElement.src = image;
                imgElement.alt = 'Image';
                imageContainer.appendChild(imgElement);
            });
        }
        
        function updatePagination() {
            prevBtn.disabled = currentPage === 1;
            nextBtn.disabled = currentPage === Math.ceil(images.length / itemsPerPage);


            if (prevBtn.disabled) {
                prevBtn.classList.add('emphasized-red');
                prevBtn.classList.remove('light-green');
            } else {
                prevBtn.classList.add('light-green');
                prevBtn.classList.remove('emphasized-red');
            }

            if (nextBtn.disabled) {
                nextBtn.classList.add('emphasized-red');
                nextBtn.classList.remove('light-green');
            } else {
                nextBtn.classList.add('light-green');
                nextBtn.classList.remove('emphasized-red');
            }

            
            selectedDeskText.textContent = `Selected Desk: ${selectedDesk}`;
        }
        
        prevBtn.addEventListener('click', function() {
            if (currentPage > 1) {
                currentPage--;
                displayImages();
                updatePagination();
            }
        });
        
        nextBtn.addEventListener('click', function() {
            if (currentPage < Math.ceil(images.length / itemsPerPage)) {
                currentPage++;
                displayImages();
                updatePagination();
            }
        });

        
        selectedDesk = 'Desk 1';
        updatePagination(); 

        displayImages();
        updatePagination();
    });
</script>

</body>
</html>
