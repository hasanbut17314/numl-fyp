<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0" />
    <link rel="stylesheet" href="../../assets/css/custom.css">
    <link rel="stylesheet" href="../../assets/css/index.css">
    <title>Document</title>
</head>
<body>
    <header class="flex">
        <aside class="h-screen bg-[#8EA1E6] md:w-[15%] p-3 flex flex-col justify-between">
            <div class="flex flex-col">
                <img src="../../assets/images/Graduation Cap.png" class="mx-auto p-4 bg-[#2B2941] rounded-3xl">
                <div class="flex items-center justify-center mt-5 py-3">
                <span class="material-symbols-outlined">team_dashboard</span>
                <p class="font-semibold ms-2">Dashboard</p>
                </div>
            </div>
            <form class="flex items-center justify-center py-4" action="../../functions/logout.php" method="post">
                <span class="material-symbols-outlined">logout</span>
                <button class="ms-2" type="submit" name="std_logout_btn">Logout</button>
            </form>
        </aside>
        <div class="h-screen md:w-[85%] bg-[#E6E6E6] px-10 py-6">
            <div class="flex bg-white px-3 py-5 rounded-3xl gap-x-4">
                <div>
                    <img src="../../assets/images/Rectangle 1.jpg" class="h-[138px]">
                </div>
                <div class="flex flex-col">
                    <h2 class="font-semibold text-2xl mb-2">Abdullah Sajid</h2>
                    <p class="font-semibold mb-2">Roll No: <span class="font-light">Numl-S20-423</span></p>
                    <p class="font-semibold mb-2">Degree: <span class="font-light">BSCS</span></p>
                </div>
            </div>