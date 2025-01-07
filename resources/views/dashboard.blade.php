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
        <div style="width: 16px; height: 16px; background-color: white;"></div>
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
        <div class="bg-white p-6 rounded-lg shadow-lg mb-6 w-3/4">
            <h2 class="text-2xl font-bold flex items-center justify-center mb-4">
                <img src="{{ asset('images/networks.png') }}" alt="Networks" class="w-6 mr-2">
                Networks
            </h2>
            <div class="flex flex-wrap justify-center">
                <form action="{{ route('networks.setNetwork') }}" method="POST" class="px-4">
                    @csrf
                    <input type="hidden" name="network" value="52">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700 focus:outline-none mb-2" style="width: 123px; height: 48px;">Network 52</button>
                </form>
                <form action="{{ route('networks.setNetwork') }}" method="POST" class="px-5">
                    @csrf
                    <input type="hidden" name="network" value="53">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700 focus:outline-none mb-2" style="width: 123px; height: 48px;">Network 53</button>
                </form>
                <form action="{{ route('networks.setNetwork') }}" method="POST" class="px-5">
                    @csrf
                    <input type="hidden" name="network" value="57">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700 focus:outline-none mb-2" style="width: 123px; height: 48px;">Network 57</button>
                </form>
                <form action="{{ route('networks.setNetwork') }}" method="POST" class="px-5">
                    @csrf
                    <input type="hidden" name="network" value="212">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700 focus:outline-none mb-2" style="width: 123px; height: 48px;">Network 212</button>
                </form>
                <form action="{{ route('networks.setNetwork') }}" method="POST" class="px-5">
                    @csrf
                    <input type="hidden" name="network" value="215">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700 focus:outline-none mb-2" style="width: 123px; height: 48px;">Network 215</button>
                </form>
            </div>

        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg w-3/4">
            <h2 class="text-2xl font-bold flex items-center justify-center mb-4">
                <img src="{{ asset('images/views.png') }}" alt="Views" class="w-6 mr-2">
                Views
            </h2>
            <div class="overflow-x-auto">
                <table class="w-1/3 bg-white text-center">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b bg-blue-500 text-white">VLAN</th>
                            <th class="py-2 px-4 border-b bg-blue-500 text-white">NETWORK</th>
                            <th class="py-2 px-4 border-b bg-blue-500 text-white">USE</th>
                            <th class="py-2 px-4 border-b bg-blue-500 text-white">FREE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 px-4 border-b">Network 52</td>
                            <td class="py-2 px-4 border-b">FA</td>
                            <td class="py-2 px-4 border-b"></td>
                            <td class="py-2 px-4 border-b"></td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b">Network 53</td>
                            <td class="py-2 px-4 border-b">FA</td>
                            <td class="py-2 px-4 border-b"></td>
                            <td class="py-2 px-4 border-b"></td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b">Network 57</td>
                            <td class="py-2 px-4 border-b">FA-OA</td>
                            <td class="py-2 px-4 border-b"></td>
                            <td class="py-2 px-4 border-b"></td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b">Network 212</td>
                            <td class="py-2 px-4 border-b">OA</td>
                            <td class="py-2 px-4 border-b"></td>
                            <td class="py-2 px-4 border-b"></td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b">Network 215</td>
                            <td class="py-2 px-4 border-b">FA</td>
                            <td class="py-2 px-4 border-b"></td>
                            <td class="py-2 px-4 border-b"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
