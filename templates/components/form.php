
<form action="" method="post" class="m-auto max-w-screen-lg m-4 shadow-sm">
<div class="flex  gap-4 my-4">
    <div class="">
        <label for="firstname" class="font-semibold text-lg">Votre prénom</label>
        <input type="text" name="firstname" id="firstname"
        placeholder="Martin" value="Martine" minlength="2" maxlength="80" class="border-2 border-slate-600 rounded-lg px-4 py-2"required>
    </div>
    <div class="">
        <label for="lastname" class="font-semibold text-lg">Votre nom</label>
        <input type="text" name="lastname" id="lastname"
        placeholder="Dupont" value="Dupont" minlength="2" maxlength="80" class="border-2 border-slate-600 rounded-lg px-4 py-2"required>
    </div>
</div>
<button type="submit" class="bg-white text-slate-800 rounded-lg shadow-md p-2 mt-4 hover:text-white hover:bg-slate-800">
    Envoyer
</button>
</form>