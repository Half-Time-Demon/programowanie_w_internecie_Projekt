<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function changeClass(i) {
            var element = document.getElementById(i);
            var list = document.getElementById('myList');
            var listItems = list.getElementsByTagName('li');

            // starcie klasy dla całej listy
            for (var j = 0; j < listItems.length; j++) {
                listItems[j].classList.remove('curent-page');
            }
            
            // Dodawanie klasy
            element.classList.add('curent-page');
        }
        $(document).ready(function() {
            // Nasłuchiwanie kliknięcia na przycisk
            $('#home').click(function() {
                // Wysyłanie żądania AJAX do skryptu PHP
                $.ajax({
                    url: 'home.php',
                    type: 'GET',
                    dataType: 'html',
                    success: function(response) {
                        // Aktualizowanie treści na stronie
                        $('#content').html(response);
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
                changeClass(1);
            });
            $('#rejestracja_uzytkownika').click(function() {
                // Wysyłanie żądania AJAX do skryptu PHP
                $.ajax({
                    url: 'rejestracja_uzytkownika.php',
                    type: 'GET',
                    dataType: 'html',
                    success: function(response) {
                        // Aktualizowanie treści na stronie
                        $('#content').html(response);
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
                changeClass(2);
            });
        });
</script>

<div class="menu" >
    <div class="menu-center">
        <div class="menu-line">
            <ul id="myList">
                <li id="1" class="curent-page">
                    <a id="home">home</a>
                </li>
                <li id="2">
                    <a id="rejestracja_uzytkownika">rejestracja uzytkownika</a>
                </li>
                <li id="3">
                    <a >Los zwiezont</a>
                </li>
                <li id="4">
                    <a >Nowiny</a>
                </li id="5">
                <li id="6">
                    <a >Kontakty</a>
                </li>
            </ul>
        </div>
    </div>
</div>