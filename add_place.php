<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Service</title>
    <style>
        /* Your styling goes here */
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 600px;
            margin: 20px 420px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: purple;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        button {
            padding: 10px;
            margin-top: 10px;
        }
    </style>
    <?php include 'db1.php'; ?>
</head>
<body>

    <h2>Add Service</h2>
    <?php
    // Initialize $service as an empty array
    $service = array(
        'Service_ID' => '',
        'Service_Name' => '',
        'Tagline' => '',
        'About' => '',
        'Key_Features' => '',
        'Image' => '',
        'Image1' => '',
        'Image2' => '',
        'Address' => '',
        'Timings' => '',
        'Phone' => '',
        'Price' => '',
        'Category_ID' => '',
        'Sub_Category_ID' => ''
    );
    ?>
  
        <form id="addServiceForm" method="post" action="insert_place.php">
            <label for="serviceName">Service Name:</label>
            <input type="text" id="serviceName" name="serviceName" required>

            <label for="tagline">Tagline:</label>
            <input type="text" id="tagline" name="tagline" required>

            <label for="about">About:</label>
            <textarea id="about" name="about" required></textarea>

            <label for="keyFeatures">Key Features:</label>
            <textarea id="keyFeatures" name="keyFeatures" required></textarea>

            <!-- Additional fields -->

            <label for="image">Image URL:</label>
            <input type="text" id="image" name="image" required>

            <label for="image1">Image 1 URL:</label>
            <input type="text" id="image1" name="image1" required>

            <label for="image2">Image 2 URL:</label>
            <input type="text" id="image2" name="image2" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>

            <label for="timings">Timings:</label>
            <input type="text" id="timings" name="timings" required>

            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required>

            <label for="price">Price:</label>
            <input type="text" id="price" name="price" required>

            <label for="categoryId">Category ID:</label>
            <input type="text" id="categoryId" name="categoryId" required>

            <label for="subCategoryId">Sub Category ID:</label>
            <input type="text" id="subCategoryId" name="subCategoryId">

            <!-- Add new fields as needed -->

            <button type="submit">Save Service</button>
        </form>

</body>
</html>
