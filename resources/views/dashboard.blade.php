<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="flex justify-between items-center bg-white p-4 shadow-md">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-32">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="flex items-center bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-700 focus:outline-none">
                <img src="{{ asset('images/logout.png') }}" alt="Logout" class="w-6 mr-2">
                Log out
            </button>
        </form>
    </div>

    <div class="p-6 flex flex-col items-center">
        <div class="bg-white p-6 rounded-lg shadow-lg mb-6 w-1/2">
            <h2 class="text-2xl font-bold flex items-center justify-center mb-4">
                <img src="{{ asset('images/networks.png') }}" alt="Networks" class="w-6 mr-2">
                Networks
            </h2>
            <div class="flex flex-wrap justify-center space-x-4">
            <form action="{{ route('networks.setNetwork') }}" method="POST"> 
                @csrf <input type="hidden" name="network" value="52"> 
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700 focus:outline-none mb-2">Network 52</button> 
            </form> 
            <form action="{{ route('networks.setNetwork') }}" method="POST">
                @csrf 
                <input type="hidden" name="network" value="53"> 
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700 focus:outline-none mb-2">Network 53</button> 
            </form> 
            <form action="{{ route('networks.setNetwork') }}" method="POST"> 
                @csrf 
                <input type="hidden" name="network" value="57"> 
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700 focus:outline-none mb-2">Network 57</button> 
            </form> 
            <form action="{{ route('networks.setNetwork') }}" method="POST"> 
                @csrf 
                <input type="hidden" name="network" value="212"> 
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700 focus:outline-none mb-2">Network 212</button> 
            </form> 
            <form action="{{ route('networks.setNetwork') }}" method="POST"> 
                @csrf 
                <input type="hidden" name="network" value="215"> 
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700 focus:outline-none mb-2">Network 215</button> 
            </form>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg w-1/2">
            <h2 class="text-2xl font-bold flex items-center justify-center mb-4">
                <img src="{{ asset('images/views.png') }}" alt="Views" class="w-6 mr-2">
                Views
            </h2>
            <div class="flex flex-wrap justify-center space-x-4">
                <button class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-700 focus:outline-none mb-2">GENERAL</button>
                <button class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-700 focus:outline-none mb-2">PRODUCTION</button>
            </div>
        </div>
    </div>
</body>
</html>
