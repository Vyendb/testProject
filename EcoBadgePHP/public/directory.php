<!DOCTYPE html>
<html lang="en">
<?php include 'include/header.php'; ?>
<link rel="stylesheet" href="css/directory.css"/>
<body>
<?php include 'include/navbar.php'; ?>


<div class="directoryBody m-auto">

    <div class="tableAndMap d-flex">

        <div class="table-responsive flex-fill me-5">

            <table class="table table-success table-hover table-bordered mb-0" id="myTable">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Location</th>
                    <th scope="col">Cuisine</th>
                    <th scope="col">EcoTier</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>J's Sandwich Shop</td>
                    <td>90 Clifton Pl, Mutley, Plymouth</td>
                    <td>Sandwiches</td>
                    <td>Gold</td>
                </tr>
                <tr class="mustHave">
                    <td>Vegan Kitchen</td>
                    <td>Palace Street, Plymouth</td>
                    <td>Mediterranean, Vegan</td>
                    <td>Platinum</td>
                </tr>
                <tr>
                    <td>Churchill Inn</td>
                    <td>Sutton Harbour</td>
                    <td>Pub Food</td>
                    <td>Gold</td>
                </tr>
                <tr>
                    <td>McDouglas</td>
                    <td>Edward St, Plymouth</td>
                    <td>Fast Food</td>
                    <td>Gold</td>
                </tr>
                <tr>
                    <td>Pizza Palace</td>
                    <td>Barbican Leisure Park</td>
                    <td>Pizza, Pasta</td>
                    <td>Silver</td>
                </tr>
                <tr>
                    <td>Johns Pasta</td>
                    <td>1, First Street</td>
                    <td>Pasta, Italian</td>
                    <td>Silver</td>
                </tr>
                <tr>
                    <td>Luigis Pizza</td>
                    <td>10, Main Street</td>
                    <td>Pizza, Italian</td>
                    <td>Gold</td>
                </tr>
                <tr>
                    <td>Best Kebaby</td>
                    <td>90 Regent Street</td>
                    <td>Kebab, Fast Food, Turkish</td>
                    <td>Bronze</td>
                </tr>
                <tr>
                    <td>Lucky Wok</td>
                    <td>Hornbeam Close</td>
                    <td>Chinese, Cantonese</td>
                    <td>Bronze</td>
                </tr>
                <tr>
                    <td>NinetyOne</td>
                    <td>Kimberley Road</td>
                    <td>Japanese</td>
                    <td>Silver</td>
                </tr>
                <tr>
                    <td>Marracas</td>
                    <td>Albert Street</td>
                    <td>Mexican</td>
                    <td>Silver</td>
                </tr>
                <tr>
                    <td>Marco's</td>
                    <td>Heath Close</td>
                    <td>Fine Dining</td>
                    <td>Gold</td>
                </tr>
                </tbody>

            </table>
        </div>

        <div id="map" class="shadow-sm rounded-3"></div>
        <script>
            mapboxgl.accessToken = 'pk.eyJ1IjoiZGV0ZXNkZW4iLCJhIjoiY2t4aHFrdzFsNXkyOTJ0bGFpNnR2ZnQ0NSJ9.ZvKxBeZz0jEF0WpvSW-Dlw';
            const map = new mapboxgl.Map({
                container: 'map', // container ID
                style: 'mapbox://styles/mapbox/streets-v11', // style URL
                center: [-4.142582, 50.375442], // starting position [lng, lat] -> (Plymouth)
                zoom: 12 // starting zoom
            });

            map.addControl(new mapboxgl.NavigationControl());
            map.addControl(new mapboxgl.FullscreenControl());
        </script>

    </div>

</div>

<?php include 'include/footer.php'; ?>
<script src="js/directory.js" type="text/javascript"></script>
</body>
</html>