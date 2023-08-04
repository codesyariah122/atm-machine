<section id="atm-starting">
	<div class="flex justify-center">
		<div>
			<h1 class="font-mono font-bold text-6xl text-white">ATM Machine</h1>
		</div>
	</div>
	<div class="flex justify-center py-12">
		<div>
			<img src="/public/assets/img/icon.png" class="start-atm w-[400px] h-auto cursor-pointer transition-transform transform hover:scale-110">
		</div>
	</div>
</section>

<section id="atm-showing" class="hidden">
	<div class="flex justify-center py-12 mb-6">
		<div>
			<div>
				<h1 class="font-sans font-bold text-4xl text-white">
					Pilih Transaksi Yang Anda Inginkan
				</h1>
			</div>
		</div>
	</div>

	<div class="grid grid-cols-2 gap-6 justify-between place-items-center mb-6">
		<div>
			<button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-xl w-[250px] px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Transfer</button>
		</div>
		<div>
			<button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-xl w-[250px] px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Tarik Tunai</button>
		</div>
	</div>
	<div class="grid grid-cols-2 gap-6 justify-between place-items-center mb-6">
		<div>
			<button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-xl w-[250px] px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Pembayaran</button>
		</div>
		<div>
			<button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-xl w-[250px] px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Info Saldo</button>
		</div>
	</div>

	<div class="grid grid-cols-2 gap-6 justify-between place-items-center py-6">
		<div>
			<button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-lg w-[350px] px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Cancel</button>
		</div>
		<button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg w-[350px] px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Process</button>
	</div>
</section>