<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
            
                <form method="POST" action="insert" enctype="multipart/form-data">
        @csrf

        <!-- Product Name -->
        <div>
            <x-input-label for="Product Name" :value="__('Product Name')" />
            <x-text-input id="pname" class="block mt-1 w-full" type="text" name="pname" :value="old('pname')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('pname')" class="mt-2" />
        </div>
<br/>
        <div>
        <x-input-label for="Unit Type" :value="__('Unit Type')" />    
                <select x-model="color" class="block mt-1 w-full" name="unittype" required style=" background: #111827; border-color: #374151; border-radius: 5px;">
                    <option value="" disabled>Unit Type</option>    
                    <option value="Quantity">Quantity</option>
                    <option value="Litre">Litre</option>
                    <option value="KG">KG </option>
                    <option value="Meter">Meter </option>
            </select>
        </div>
        <br/>
        <div>
            <x-input-label for="Product Category " :value="__('Product Category ')" />
            <x-text-input id="pcategory" class="block mt-1 w-full" type="text" name="pcategory" :value="old('pcategory')" required />
            <x-input-error :messages="$errors->get('pcategory')" class="mt-2" />
        </div>
        <br/>
        <div>
        <x-input-label for="Product Images " :value="__('Product Images ')" />
        <input type="file" id="pimages" name="pimages" accept="image/png, image/jpeg" multiple/>
        </div>  

        <br/>
        <div>
            <x-input-label for="Product Price " :value="__('Product Price ')" />
            <x-text-input id="pprice" class="block mt-1 w-full" type="text" name="pprice" :value="old('pprice')" required />
            <x-input-error :messages="$errors->get('pprice')" class="mt-2" />
        </div>
        <br/>
        <div>
            <x-input-label for="Discount Percentage " :value="__('Discount Percentage ')" />
            <x-text-input id="dpercentage" class="block mt-1 w-full" type="text" name="dpercentage" :value="old('dpercentage')" required />
            <x-input-error :messages="$errors->get('dpercentage')" class="mt-2" />
        </div>
        <br/>
        <div>
            <x-input-label for="Discount Amount " :value="__('Discount Amount ')" />
            <x-text-input id="damount" class="block mt-1 w-full" type="text" name="damount" :value="old('damount')" required />
            <x-input-error :messages="$errors->get('damount')" class="mt-2" />
        </div>

        <br/>
        <div>
            <x-input-label for="Discount Range Dates " :value="__('Discount Range Dates ')" />
            <div style=" display: flex;">  
            <div style=" width: 100%;">  
            <x-input-label for="From Date" :value="__('From Date')" />
            <x-text-input id="dfdate" class="block mt-1 w-full" type="date" name="dfdate" :value="old('dfdate')" required />
            <x-input-error :messages="$errors->get('dfdate')" class="mt-2" />
            </div>
              <div style=" width: 100%;">  
            <x-input-label for="To Date" :value="__('To Date')" />  
            <x-text-input id="dtdate" class="block mt-1 w-full" type="date" name="dtdate" :value="old('dtdate')" required />
            <x-input-error :messages="$errors->get('dtdate')" class="mt-2" />
            </div>
        </div>
        </div>
        <br/>
        <div>
            <x-input-label for="Tax Percentage " :value="__('Tax Percentage ')" />
            <x-text-input id="tpercentage" class="block mt-1 w-full" type="text" name="tpercentage" :value="old('tpercentage')" required />
            <x-input-error :messages="$errors->get('tpercentage')" class="mt-2" />
        </div>
        <br/>
        <div>
            <x-input-label for="Tax Amount " :value="__('Tax Amount ')" />
            <x-text-input id="tamount" class="block mt-1 w-full" type="text" name="tamount" :value="old('tamount')" required />
            <x-input-error :messages="$errors->get('tamount')" class="mt-2" />
        </div>

        <br/>
        <div>
            <x-input-label for="Stock Entry" :value="__('Stock Entry (Quantity No’s) ')" />
            <x-text-input id="seqty" class="block mt-1 w-full" type="text" name="seqty" :value="old('seqty')" required />
            <x-input-error :messages="$errors->get('seqty')" class="mt-2" />
        </div>
        <br/>
        
        <button type="submit" class="btn btn-primary" style="background-color: #959595;padding: 10px;border-radius: 10px;" name="create" value="Create Product">Create Product</button>
            
        </div>
    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
