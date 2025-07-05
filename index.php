<!DOCTYPE html>
<html lang="en">
<?php
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>Admin Home</title>
 <style>
         body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden; /* Hide vertical scrollbar */
        }

        #dashboard {
            float: left;
            width: 200px;
            height: 100%;
            padding: 20px;
            background-color: #f0f0f0;
            box-sizing: border-box;
        }

        #tablesContainer {
            float: left;
            width: calc(100% - 200px);
            height: 100%;
            padding: 20px;
            box-sizing: border-box;
        }

        #dashboard a {
            display: block;
            margin-bottom: 10px;
        }

        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Ahmedabad City" width="100" height="100">
        </div>
        <div class="name" style="text-indent: -550px;">
            <h1>AhmdXploreHub</h1>
        </div>
        <div class="dropdown">
            <i class="fa fa-user-circle" style="font-size: 30px; text-indent: -70px;"></i>
            <div class="dropdown-content">
                <a href="account info.html">Profile</a><br>
                <a href="home.html">Logout</a>
            </div>
        </div>      
        
    </header>

    <div id="dashboard">
        <h3>Dashboard</h3>
        <a href="#" onclick="showTableContent('user_tbl')">Users</a>
        <a href="#" onclick="showTableContent('category_master_tbl')">Categories</a>
        <a href="#" onclick="showTableContent('sub_category_tbl')">Subcategories</a>
        <a href="#" onclick="showTableContent('service_tbl')">Services</a>
        <a href="#" onclick="showTableContent('booking_tbl')">Bookings</a>
        <a href="#" onclick="showTableContent('payment_master_tbl')">Payments</a>
        <a href="#" onclick="showTableContent('feedback_tbl')">Feedbacks</a>
        <a href="#" onclick="showTableContent('statistics')">Statistics</a>
        <div class="dropdown" onmouseover="showReportsDropdown()">
            <a href="#">Reports</a>
            <div class="dropdown-content" id="reportsDropdown" style="display: none;">
                <a href="#" onclick="showTableContent('user_report')">User Report</a>
                <a href="#" onclick="showTableContent('service_report')">Service Report</a>
                <a href="#" onclick="showTableContent('booking_report')">Booking Report</a>
            </div>
        </div>
    </div>

    <div id="tablesContainer">
        <!-- Table content will be displayed here -->
    </div>

    <script>
         $(document).ready(function () {
            // Load default table (Reports) when the page is ready
            showDefaultContent();
        });
        $(document).ready(function () {
            // Load default table (Reports) when the page is ready
            showDefaultContent();
        });
        function showReportsDropdown() {
            document.getElementById("reportsDropdown").style.display = "block";
        }

        // Function to hide the reports dropdown when mouse leaves it
        function hideReportsDropdown() {
            document.getElementById("reportsDropdown").style.display = "none";
        }

        // Add event listener to hide the dropdown when mouse leaves it
        document.getElementById("reportsDropdown").addEventListener("mouseleave", hideReportsDropdown);
        function showTableContent(tableName) {
            if (tableName === 'statistics') {
                // Special handling for the "Reports" file
                showDefaultContent();
            } else if ( tableName === 'user_report'){
                $('#tablesContainer').html('<iframe src="userreport.php" width="100%" height="100%"></iframe>');}
                else if ( tableName === 'service_report'){
                $('#tablesContainer').html('<iframe src="servicereport.php" width="100%" height="100%"></iframe>');}
                else if ( tableName === 'booking_report'){
                $('#tablesContainer').html('<iframe src="bookingreport.php" width="100%" height="100%"></iframe>');}
                else{
           
                // Handle other tables as usual
                $.ajax({
                    url: 'fetch_tables_content.php',
                    type: 'GET',
                    data: { tableName: tableName },
                    dataType: 'json',
                    success: function (data) {
                        if ('error' in data) {
                            console.log("Error fetching table content:", data.error);
                            alert('Failed to fetch table content.');
                        } else {
                            displayTableContent(tableName, data);
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log("Failed to fetch table content:", errorThrown);
                        alert('Failed to fetch table content.');
                    }
                });
            }
        }

        function showDefaultContent() {
            // Load the default content (file or table) as needed
            // You may need to adjust this based on how "report.php" should be displayed
            // For example, if it's an iframe, you can dynamically create an iframe and set its source
            $('#tablesContainer').html('<iframe src="statistics.php" width="100%" height="100%"></iframe>');
        }

        function displayTableContent(tableName, data) {
    var tableHtml = "<table border='1'>";
    if (data.length > 0) {
        // Display table headers
        tableHtml += "<tr>";
        for (var key in data[0]) {
            if (key !== 'Password' && key !== 'resettoken' && key !== 'expire' && !['Tagline', 'About', 'Key_Features', 'Image', 'Image1', 'Image2', 'Address', 'Timings', 'Phone', 'Date', 'Price'].includes(key)) {
                if (tableName === 'service_tbl' && (key === 'Service_ID' || key === 'Service_Name')) {
                    tableHtml += "<th>" + key + "</th>";
                } else if (tableName === 'service_tbl' && key === 'User_ID') {
                    // Display the User_Name instead of User_ID
                    tableHtml += "<th>Service Provider_Name</th>";
                } else if (tableName === 'service_tbl' && key === 'Category_ID') {
                    tableHtml += "<th>Category_Name</th>"; // Display category name header instead of 'Category_ID'
                } else if (tableName === 'service_tbl' && key === 'Sub_Category_ID') {
                    tableHtml += "<th>Sub_Category_Name</th>"; // Display category name header instead of 'Category_ID'
                } else if (tableName === 'sub_category_tbl' && key === 'Category_ID') {
                    // Display the category name header instead of skipping 'Category_ID'
                    tableHtml += "<th>Category_Name</th>";
                } else if (tableName === 'booking_tbl' && key === 'Service_ID') {
                    // Display the Service_Name instead of Service_ID
                    tableHtml += "<th>Service_Name</th>";
                } else if (tableName === 'payment_master_tbl' && key === 'Payment_Mode') {
                    tableHtml += "<th>Payment_Mode</th>"; // Display 'Payment Mode' header
                } else if (tableName === 'payment_master_tbl' && key === 'Payment_Status') {
                    tableHtml += "<th>Payment_Status</th>"; // Display 'Payment Status' header
                } else if (tableName === 'feedback_tbl' && key === 'User_ID') {
                    tableHtml += "<th>Tourist_Name</th>";
                } else {
                    tableHtml += "<th>" + key + "</th>";
                }
            }
        }
        if (tableName === 'category_master_tbl' || tableName === 'sub_category_tbl' || tableName === 'service_tbl') {
            tableHtml += "<th>Action</th>";  // Add an action column for specific tables
        }
        tableHtml += "</tr>";

        // Display table rows
        for (var i = 0; i < data.length; i++) {
            tableHtml += "<tr>";
            for (var key in data[i]) {
                if (key !== 'Password' && key !== 'resettoken' && key !== 'expire' && !['Tagline', 'About', 'Key_Features', 'Image', 'Image1', 'Image2', 'Address', 'Timings', 'Phone', 'Date', 'Price'].includes(key)) {
                    if (tableName === 'user_tbl' && key === 'User_Type') {
                        tableHtml += "<td>" + (data[i][key] == 1 ? 'Tourist' : 'Service Provider') + "</td>";
                    } else if (tableName === 'service_tbl' && key === 'User_ID') {
                        // Fetch and display the corresponding User_Name from user_tbl
                        var userName = getUserName(data[i][key]); // You need to implement this function
                        tableHtml += "<td>" + userName + "</td>";
                    } else if (tableName === 'service_tbl' && key === 'Service_ID') {
                        // Display the service ID as it is
                        tableHtml += "<td>" + data[i][key] + "</td>";
                    } else if (tableName === 'service_tbl' && key === 'Service_Name') {
                        // Display the service name as a link with lowercase letters and spaces
                        var serviceNameLink = data[i][key].toLowerCase().replace(/ /g, '_') + '.php';
                        tableHtml += "<td><a href='" + serviceNameLink + "'>" + data[i][key] + "</a></td>";
                    } else if (tableName === 'service_tbl' && key === 'Category_ID') {
                        // Fetch and display the corresponding category name from category_master_tbl
                        var categoryName = getCategoryName(data[i][key]); // You need to implement this function
                        tableHtml += "<td>" + categoryName + "</td>";
                    } else if (tableName === 'service_tbl' && key === 'Sub_Category_ID') {
                        // Fetch and display the corresponding category name from category_master_tbl
                        var subcategoryName = getSubCategoryName(data[i][key]); // You need to implement this function
                        tableHtml += "<td>" + subcategoryName + "</td>";
                    } else if (tableName === 'sub_category_tbl' && key === 'Category_ID') {
                        // Fetch and display the corresponding category_name from category_master_tbl
                        var categoryName = getCategoryName(data[i][key]); // You need to implement this function
                        tableHtml += "<td>" + categoryName + "</td>";
                    } else if (tableName === 'booking_tbl' && key === 'Service_ID') {
                        // Fetch and display the corresponding Service_Name from service_tbl
                        var serviceName = getServiceName(data[i][key]); // You need to implement this function
                        tableHtml += "<td>" + serviceName + "</td>";
                    } else if (tableName === 'payment_master_tbl' && key === 'Payment_Mode') {
                        // Display payment mode as Cash if value is 1, otherwise display as is
                        tableHtml += "<td>" + (data[i][key] == 1 ? 'Cash' : data[i][key] == 2 ? 'Credit/Debit Card' : 'UPI') + "</td>";
                    } else if (tableName === 'payment_master_tbl' && key === 'Payment_Status') {
                        // Display payment mode as Cash if value is 1, otherwise display as is
                        tableHtml += "<td>" + (data[i][key] == 1 ? 'Successful' : 'Pending') + "</td>";
                    } else if (tableName === 'feedback_tbl' && key === 'User_ID') {
                        // Fetch and display the corresponding User_Name from user_tbl
                        var userName = getUserName(data[i][key]); // You need to implement this function
                        tableHtml += "<td>" + userName + "</td>";
                    } else {
                        // Display other table data as it is
                        tableHtml += "<td>" + data[i][key] + "</td>";
                    }
                }
            }
            // Add action column for specific tables
            if (tableName === 'category_master_tbl' || tableName === 'sub_category_tbl' || tableName === 'service_tbl') {
                tableHtml += "<td>" + getActionHtml(tableName, data[i]) + "</td>";
            }
            tableHtml += "</tr>";
        }
    } else {
        tableHtml += "<tr><td colspan='100%'>No data available</td></tr>";
    }
    // Add specific button for adding categories, subcategories, and services
    if (tableName === 'category_master_tbl') {
        tableHtml += "<tr><td colspan='3'" + (Object.keys(data[0]).length) + "' style='text-align:right;'><button onclick='addCategory()'>Add</button></td></tr>";
    }
    if (tableName === 'sub_category_tbl') {
        tableHtml += "<tr><td colspan='4'" + (Object.keys(data[0]).length) + "' style='text-align:right;'><button onclick='addSubCategory()'>Add</button></td></tr>";
    }
    tableHtml += "</table>";

    // Display the table content
    $('#tablesContainer').html(tableHtml);
}

// Example function to fetch category name based on category ID
function getCategoryName(categoryID) {
    var categoryName = ""; // Initialize an empty string

    // Make an AJAX request to fetch the category name based on category ID
    $.ajax({
        url: 'fetch_category_name.php', // Update with the correct path to your PHP script
        type: 'GET',
        data: { categoryID: categoryID },
        async: false,
        dataType: 'json',
        success: function (data) {
            if ('error' in data) {
                console.log("Error fetching category name:", data.error);
            } else {
                categoryName = data.categoryName;
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log("Failed to fetch category name:", errorThrown);
        }
    });

    return categoryName;
}

function getSubCategoryName(subcategoryID) {
    var subcategoryName = ""; // Initialize an empty string

    // Make an AJAX request to fetch the category name based on category ID
    $.ajax({
        url: 'fetch_subcategory_name.php', // Update with the correct path to your PHP script
        type: 'GET',
        data: { subcategoryID: subcategoryID },
        async: false,
        dataType: 'json',
        success: function (data) {
            if ('error' in data) {
                console.log("Error fetching subcategory name:", data.error);
            } else {
                subcategoryName = data.subcategoryName;
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log("Failed to fetch subcategory name:", errorThrown);
        }
    });

    return subcategoryName;
}

function getUserName(userID) {
    var userName = ""; // Initialize an empty string

    // Make an AJAX request to fetch the User_Name based on User_ID
    $.ajax({
        url: 'fetch_user_name.php', // Update with the correct path to your PHP script
        type: 'GET',
        data: { userID: userID },
        async: false,
        dataType: 'json',
        success: function (data) {
            if ('error' in data) {
                console.log("Error fetching user name:", data.error);
            } else {
                userName = data.userName;
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log("Failed to fetch user name:", errorThrown);
        }
    });

    return userName;
}

function getServiceName(serviceID) {
    var serviceName = ""; // Initialize an empty string

    // Make an AJAX request to fetch the Service_Name based on Service_ID
    $.ajax({
        url: 'fetch_service_name.php', // Update with the correct path to your PHP script
        type: 'GET',
        data: { serviceID: serviceID },
        async: false,
        dataType: 'json',
        success: function (data) {
            if ('error' in data) {
                console.log("Error fetching service name:", data.error);
            } else {
                serviceName = data.serviceName;
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log("Failed to fetch service name:", errorThrown);
        }
    });

    return serviceName;
}

        function getActionHtml(tableName, rowData) {
            // Add different actions based on the table
             if (tableName === 'category_master_tbl') {
                // Example actions for 'categories' table
                return '<button onclick="editCategory(' + rowData['Category_ID'] + ')"><i class="fa fa-pencil"></i></button>' +
       '<button onclick="deleteCategory(' + rowData['Category_ID'] + ')"><i class="fa fa-trash"></i></button>';

            }
            else if (tableName === 'sub_category_tbl') {
                // Example actions for 'categories' table
                return '<button onclick="editSubCategory(' + rowData['Sub_Category_ID'] + ')"><i class="fa fa-pencil"></i></button>' +
       '<button onclick="deleteSubCategory(' + rowData['Sub_Category_ID'] + ')"><i class="fa fa-trash"></i></button>';

            }
            else if (tableName === 'service_tbl') {
                // Example actions for 'categories' table
                return '<button onclick="deleteService(' + rowData['Service_ID'] + ')"><i class="fa fa-trash"></i></button>';

            }
            else if (tableName === 'feedback_tbl') {
                // Example actions for 'categories' table
                return '<button onclick="feedback(' + rowData['feedback_id'] + ')"><i class="fa fa-trash"></i></button>';

            }
            // Add more conditions for other tables if needed
            return '';
        }

        // Add more functions for specific actions as needed

        function addSubCategory() {
    var newSubCategoryName = prompt('Enter the new subcategory name:');
    var categoryId = prompt('Enter the category ID for the new subcategory:');

    if (newSubCategoryName !== null && newSubCategoryName !== '' && categoryId !== null && categoryId !== '') {
        // User provided both a new subcategory name and a category ID
        $.ajax({
            url: 'add_subcategory.php', // Update with the correct path to your PHP script
            type: 'POST',
            data: { Sub_Category_Name: newSubCategoryName, Category_ID: categoryId },
            dataType: 'json',
            success: function (data) {
                if ('error' in data) {
                    console.log("Error adding subcategory:", data.error);
                    alert('Failed to add subcategory.');
                } else {
                    alert('Subcategory added successfully');
                    // Refresh or update the table content as needed
                    showTableContent('sub_category_tbl');
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log("Failed to add subcategory:", errorThrown);
                alert('Failed to add subcategory.');
            }
        });
    } else {
        // User clicked Cancel or did not provide a new subcategory name or category ID
        alert('Subcategory addition canceled.');
    }
}






        function addCategory() {
        var newCategoryName = prompt('Enter the new category name:', '');

        if (newCategoryName !== null && newCategoryName !== '') {
        // User provided a new category name
        $.ajax({
            url: 'add_category.php', // Update with the correct path to your PHP script
            type: 'POST',
            data: { Category_Name: newCategoryName },
            dataType: 'json',
            success: function (data) {
                if ('error' in data) {
                    console.log("Error adding category:", data.error);
                    alert('Failed to add category.');
                } else {
                    alert('Category added successfully');
                    // Refresh or update the table content as needed
                    showTableContent('category_master_tbl');
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log("Failed to add category:", errorThrown);
                alert('Failed to add category.');
            }
        });
    } else {
        // User clicked Cancel or did not provide a new category name
        alert('Category addition canceled.');
    }
}

        function editCategory(categoryId) {
        // Implement edit category action
        var newCategoryName = prompt('Enter the updated category name:', '');

        if (newCategoryName !== null && newCategoryName !== '') {
            // User provided a new category name
            $.ajax({
                url: 'edit_category.php', // Update with the correct path to your PHP script
                type: 'POST',
                data: { categoryID: categoryId, newCategoryName: newCategoryName },
                dataType: 'json',
                success: function (data) {
                    if ('error' in data) {
                        console.log("Error updating category:", data.error);
                        alert('Failed to update category.');
                    } else {
                        alert('Category updated successfully');
                        // Refresh or update the table content as needed
                        showTableContent('category_master_tbl');
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log("Failed to update category:", errorThrown);
                    alert('Failed to update category.');
                }
            });
        } else {
            // User clicked Cancel or did not provide a new category name
            alert('Category update canceled.');
        }
    }

        

        function editService(serviceId) {
            // Implement edit service action
            window.location.href = 'edit_service.php?serviceID=' + serviceId;
            // This will redirect to the edit_service.php page with the service ID as a parameter
        }
        function deleteCategory(categoryId) {
        var confirmation = confirm('Are you sure you want to delete this category?');
        if (confirmation) {
            // Make an AJAX request to delete the category on the server
            $.ajax({
                url: 'delete_category.php',
                type: 'POST',
                data: { categoryID: categoryId },
                dataType: 'json',
                success: function (data) {
                    if ('error' in data) {
                        console.log("Error deleting category:", data.error);
                        alert('Failed to delete category.');
                    } else {
                        alert('Category deleted successfully');
                        // Refresh or update the table content as needed
                        showTableContent('category_master_tbl');
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log("Failed to delete category:", errorThrown);
                    alert('Failed to delete category.');
                }
            });
        }
    }
       

    function editSubCategory(subcategoryId) {
            // Implement edit subcategory action
            var newName = prompt('Enter the updated subcategory name:', '');
            if (newName !== null && newName.trim() !== '') {
                $.ajax({
                    url: 'edit_subcategory.php',
                    type: 'POST',
                    data: { subcategoryID: subcategoryId, newName: newName },
                    dataType: 'json',
                    success: function (data) {
                        if ('error' in data) {
                            console.log("Error editing subcategory:", data.error);
                            alert('Failed to edit subcategory.');
                        } else {
                            alert('Subcategory edited successfully');
                            // Refresh or update the table content as needed
                            showTableContent('sub_category_tbl');
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log("Failed to edit subcategory:", errorThrown);
                        alert('Failed to edit subcategory.');
                    }
                });
            }
            else {
            // User clicked Cancel or did not provide a new category name
            alert('Subcategory update canceled.');
        }
        }

        function deleteSubCategory(subcategoryId) {
            var confirmation = confirm('Are you sure you want to delete this subcategory?');
            if (confirmation) {
                $.ajax({
                    url: 'delete_subcategory.php',
                    type: 'POST',
                    data: { subcategoryID: subcategoryId },
                    dataType: 'json',
                    success: function (data) {
                        if ('error' in data) {
                            console.log("Error deleting subcategory:", data.error);
                            alert('Failed to delete subcategory.');
                        } else {
                            alert('Subcategory deleted successfully');
                            // Refresh or update the table content as needed
                            showTableContent('sub_category_tbl');
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log("Failed to delete subcategory:", errorThrown);
                        alert('Failed to delete subcategory.');
                    }
                });
            }
        }

        function deleteService(serviceId) {
            var confirmation = confirm('Are you sure you want to deactivate this service?');
            if (confirmation) {
                $.ajax({
                    url: 'deactivate_service.php', // Update with the correct path to your PHP script
                    type: 'POST',
                    data: { serviceID: serviceId },
                    dataType: 'json',
                    success: function (data) {
                        if ('error' in data) {
                            console.log("Error deactivating service:", data.error);
                            alert('Failed to deactivate service.');
                        } else {
                            alert('Service deactivated successfully');
                            // Refresh or update the table content as needed
                            showTableContent('service_tbl');
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log("Failed to deactivate service:", errorThrown);
                        alert('Failed to deactivate service.');
                    }
                });
            }
        }

        function deleteFeedback(feedbackId) {
            var confirmation = confirm('Are you sure you want to delete this feedback?');
            if (confirmation) {
                $.ajax({
                    url: 'delete_feedback.php', // Update with the correct path to your PHP script
                    type: 'POST',
                    data: { feedbackID: feedbackId },
                    dataType: 'json',
                    success: function (data) {
                        if ('error' in data) {
                            console.log("Error deleting feedback:", data.error);
                            alert('Failed to delete feedback.');
                        } else {
                            alert('Feedback deleted successfully');
                            // Refresh or update the table content as needed
                            showTableContent('feedbacks');
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log("Failed to delete feedback:", errorThrown);
                        alert('Failed to delete feedback.');
                    }
                });
            }
        }
        
    </script>
</body>

</html>
