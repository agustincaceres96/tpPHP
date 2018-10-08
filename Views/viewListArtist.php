<?php
echo "hola";
    foreach($this->artistRepository->GetAll() as $artist)
    {
        echo "<br>" . $artist->GetName();
    }
?>
