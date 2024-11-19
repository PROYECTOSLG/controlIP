<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPs de la Red {{ $network }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="flex justify-between items-center bg-white p-4 shadow-md">
        <a href="{{ route('dashboard') }}">
            <img src="{{ asset('images/back.png') }}" alt="Logo" class="w-4">
        </a>
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-32">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="flex items-center bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-700 focus:outline-none">
                <img src="{{ asset('images/logout.png') }}" alt="Logout" class="w-6 mr-2">
                Log out
            </button>
        </form>
    </div>
    <div class="container mx-auto p-8">
        <h1 class="text-2xl font-bold flex items-center justify-center mb-4">NETWORK {{ $network }}</h1>
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    @if ($network === '212')
                        <th class="py-2 bg-blue-500 border border-white text-white">No. Employee</th>
                        <th class="py-2 bg-blue-500 border border-white text-white">Name</th>
                    @endif
                    <th class="py-2 bg-blue-500 border border-white text-white">IP</th>
                    <th class="py-2 bg-blue-500 border border-white text-white">Status</th>
                    <th class="py-2 bg-blue-500 border border-white text-white">Inno</th>
                    <th class="py-2 bg-blue-500 border border-white text-white">Project</th>
                    <th class="py-2 bg-blue-500 border border-white text-white">Area</th>
                    <th class="py-2 bg-blue-500 border border-white text-white">Process</th>
                    <th class="py-2 bg-blue-500 border border-white text-white">Type</th>
                    <th class="py-2 bg-blue-500 border border-white text-white">Person In Charge</th>
                </tr>
            </thead>
            <tbody>
                @if(count($ips) > 0)
                    @foreach($ips as $index => $ip)
                        <tr onclick='showIpDetails(@json($ip))' class="{{ $index % 2 == 0 ? 'bg-white' : 'bg-blue-100' }} cursor-pointer hover:bg-blue-200">
                            @if ($network === '212')
                                <td class="py-2 text-center">{{ $ip->NO_EMPLOYEE }}</td>
                                <td class="py-2 text-center">{{ $ip->NAME }}</td>
                            @endif
                            <td class="py-2 text-center">{{ $ip->IP }}</td>
                            <td class="py-2 text-center">{{ $ip->STATUS }}</td>
                            <td class="py-2 text-center">{{ $ip->INNO }}</td>
                            <td class="py-2 text-center">{{ $ip->PROJECT }}</td>
                            <td class="py-2 text-center">{{ $ip->AREA }}</td>
                            <td class="py-2 text-center">{{ $ip->PROCESS }}</td>
                            <td class="py-2 text-center">{{ $ip->TYPE }}</td>
                            <td class="py-2 text-center">{{ $ip->PERSON_IN_CHARGE }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="{{ $network === '212' ? '10' : '8' }}" class="py-2 text-center">No hay registros disponibles.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>

    <!-- Modal en index.blade.php -->
    <div id="modal" class="fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center hidden">
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <div id="modal-content"></div>
        </div>
    </div>


    <script>
        const loggedInUserName = '{{ Auth::user()->name }}';

        function showIpDetails(ip) 
        {
            const network = "{{ $network }}";
            const thirdOctet = ip.IP.split('.')[2]; // Extrae el tercer octeto de la IP

            document.getElementById('modal-content').innerHTML = ` 
                <h2 class="text-xl font-bold mb-4">IP Details: ${ip.IP}</h2> 
                <form id="ip-details-form" action="{{ route('network.update') }}" method="POST"> 
                    @csrf 
                    <input type="hidden" name="IP_ID" value="${ip.id}"> 
                    <input type="hidden" name="network" value="${network}">
                    <div class="flex flex-wrap -mx-2">
                        ${thirdOctet === '212' ? `
                        <div class="w-full sm:w-1/2 px-2 mb-4">
                            <label for="NO_EMPLOYEE" class="block text-gray-700">No. Employee</label>
                            <input type="text" name="NO_EMPLOYEE" id="NO_EMPLOYEE" value="${ip.NO_EMPLOYEE}" class="w-full p-2 border border-gray-300 rounded-lg">
                        </div>
                        <div class="w-full sm:w-1/2 px-2 mb-4">
                            <label for="NAME" class="block text-gray-700">Name</label>
                            <input type="text" name="NAME" id="NAME" value="${ip.NAME}" class="w-full p-2 border border-gray-300 rounded-lg">
                        </div>` : ''}
                        <div class="w-full sm:w-1/2 px-2 mb-4">
                            <label for="STATUS" class="block text-gray-700">Status</label>
                            <select name="STATUS" id="STATUS" class="w-full p-2 border border-gray-300 rounded-lg">
                                <option value="FREE" ${ip.STATUS == 'FREE' ? 'selected' : ''}>FREE</option>
                                <option value="IN USE" ${ip.STATUS == 'IN USE' ? 'selected' : ''}>IN USE</option>
                                <option value="REQUESTED" ${ip.STATUS == 'REQUESTED' ? 'selected' : ''}>REQUESTED</option>
                            </select>
                        </div>
                        <div class="w-full sm:w-1/2 px-2 mb-4">
                            <label for="INNO" class="block text-gray-700">Inno</label>
                            <input type="text" name="INNO" id="INNO" value="${ip.INNO}" class="w-full p-2 border border-gray-300 rounded-lg uppercase">
                        </div>
                        <div class="w-full sm:w-1/2 px-2 mb-4">
                            <label for="PROJECT" class="block text-gray-700">Project</label>
                            <input type="text" name="PROJECT" id="PROJECT" value="${ip.PROJECT}" class="w-full p-2 border border-gray-300 rounded-lg uppercase">
                        </div>
                        <div class="w-full sm:w-1/2 px-2 mb-4">
                            <label for="AREA" class="block text-gray-700">Area</label>
                            <input type="text" name="AREA" id="AREA" value="${ip.AREA}" class="w-full p-2 border border-gray-300 rounded-lg uppercase">
                        </div>
                        <div class="w-full sm:w-1/2 px-2 mb-4">
                            <label for="PROCESS" class="block text-gray-700">Process</label>
                            <input type="text" name="PROCESS" id="PROCESS" value="${ip.PROCESS}" class="w-full p-2 border border-gray-300 rounded-lg uppercase">
                        </div>
                        <div class="w-full sm:w-1/2 px-2 mb-4">
                            <label for="TYPE" class="block text-gray-700">Type</label>
                            <input type="text" name="TYPE" id="TYPE" value="${ip.TYPE}" class="w-full p-2 border border-gray-300 rounded-lg uppercase">
                        </div>
                        <div class="w-full sm:w-1/2 px-2 mb-4">
                            <label for="PERSON_IN_CHARGE" class="block text-gray-700">Person In Charge</label>
                            <input type="text" name="PERSON_IN_CHARGE" id="PERSON_IN_CHARGE" value="${loggedInUserName}" class="w-full p-2 border border-gray-300 rounded-lg" readonly>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Modify</button>
                        <button type="button" onclick="closeModal()" class="ml-2 bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-700">Cancel</button>
                    </div>
                </form>
            `;

            document.getElementById('modal').classList.remove('hidden');
        }



        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
        }
    </script>
</body>
</html>
