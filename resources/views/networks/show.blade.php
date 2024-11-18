<form id="ip-details-form" action="{{ route('network.update') }}" method="POST">
    @csrf
    <input type="hidden" name="network" value="{{ $network }}">
    <input type="hidden" name="IP_ID" value="{{ $ipDetails->id }}">

    @if ($network === '212')
        <div class="mb-4">
            <label for="NO_EMPLOYEE" class="block text-gray-700">No. Employee</label>
            <input type="text" name="NO_EMPLOYEE" id="NO_EMPLOYEE" value="{{ $ipDetails->NO_EMPLOYEE }}" class="w-full p-2 border border-gray-300 rounded-lg">
        </div>
        <div class="mb-4">
            <label for="NAME" class="block text-gray-700">Name</label>
            <input type="text" name="NAME" id="NAME" value="{{ $ipDetails->NAME }}" class="w-full p-2 border border-gray-300 rounded-lg">
        </div>
    @endif

    <div class="mb-4">
        <label for="STATUS" class="block text-gray-700">Status</label>
        <select name="STATUS" id="STATUS" class="w-full p-2 border border-gray-300 rounded-lg">
            <option value="FREE" {{ $ipDetails->STATUS == 'FREE' ? 'selected' : '' }}>FREE</option>
            <option value="IN USE" {{ $ipDetails->STATUS == 'IN USE' ? 'selected' : '' }}>IN USE</option>
            <option value="REQUESTED" {{ $ipDetails->STATUS == 'REQUESTED' ? 'selected' : '' }}>REQUESTED</option>
        </select>
    </div>

    <div class="mb-4">
        <label for="INNO" class="block text-gray-700">Inno</label>
        <input type="text" name="INNO" id="INNO" value="{{ $ipDetails->INNO }}" class="w-full p-2 border border-gray-300 rounded-lg uppercase">
    </div>

    <div class="mb-4">
        <label for="PROJECT" class="block text-gray-700">Project</label>
        <input type="text" name="PROJECT" id="PROJECT" value="{{ $ipDetails->PROJECT }}" class="w-full p-2 border border-gray-300 rounded-lg uppercase">
    </div>

    <div class="mb-4">
        <label for="AREA" class="block text-gray-700">Area</label>
        <input type="text" name="AREA" id="AREA" value="{{ $ipDetails->AREA }}" class="w-full p-2 border border-gray-300 rounded-lg uppercase">
    </div>

    <div class="mb-4">
        <label for="PROCESS" class="block text-gray-700">Process</label>
        <input type="text" name="PROCESS" id="PROCESS" value="{{ $ipDetails->PROCESS }}" class="w-full p-2 border border-gray-300 rounded-lg uppercase">
    </div>

    <div class="mb-4">
        <label for="TYPE" class="block text-gray-700">Type</label>
        <input type="text" name="TYPE" id="TYPE" value="{{ $ipDetails->TYPE }}" class="w-full p-2 border border-gray-300 rounded-lg uppercase">
    </div>

    <div class="mb-4">
        <label for="PERSON_IN_CHARGE" class="block text-gray-700">Person In Charge</label>
        <input type="text" name="PERSON_IN_CHARGE" id="PERSON_IN_CHARGE" value="{{ $ipDetails->PERSON_IN_CHARGE }}" class="w-full p-2 border border-gray-300 rounded-lg" readonly>
    </div>

    <div class="flex justify-end">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Guardar Cambios</button>
        <button type="button" onclick="closeModal()" class="ml-2 bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-700">Cancelar</button>
    </div>
</form>
