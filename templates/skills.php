<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mes compétences</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white font-sans">

    <h1 class="bg-clip-text bg-gradient-to-br from-slate-800 to-slate-400 text-6xl font-bold text-transparent text-center mb-10 mt-10">
        Mes compétences
    </h1>

    <?php

    class competence {
        public $title;
        public $description;
        
        public function __construct($title, $description) {
            $this->title = $title;
            $this->description = $description;
        }

        public function afficher() {
            echo $this->title.' - '.$this->description.'<br>';
        }
    }

    $competences = array(
        new competence('HTML', ''),
        new competence('CSS', ''),
        new competence('JavaScript', 'Maitrise des fonctions et des boucles.'),
        new competence('PHP', 'En cours d\'aprentissage'),
        new competence('REACT', '.')
    );      
    ?>

    <div class="max-w-5xl mx-auto mb-20">
        <div class="grid grid-cols-2 bg-rose-200 text-white font-bold text-lg border rose-rose-200">
            <div class="p-4 border-r border-pink-300">Compétence</div>
            <div class="p-4"></div>
        </div>

        <?php foreach ($competences as $competence): ?>
            <div class="grid grid-cols-2 border-x border-b border-rose-200 ">
                <div class="p-4 border-r border-pink-300"><?= $competence->title ?></div>
                <div class="p-4"><?= $competence->description ?></div>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>
