<?php

include 'models.php';

$categoriaCibo = new Categoria(1, "Cibo");
$categoriaGiochi = new Categoria(2, "Giochi");
$categoriaAccessori = new Categoria(3, "Accessori");

$royalCanin = new ProdottoAlimentare(1, "Royal Canin Mini Adult", 25.99, $categoriaCibo, "Cibo per cani");
$almoNature = new ProdottoAlimentare(2, "Almo Nature Holistic", 18.99, $categoriaCibo, "Cibo per cani");
$volieraWilma = new ProdottoAccessorio(3, "Voliera Wilma", 150.99, $categoriaAccessori, "Legno");
$kongClassic = new ProdottoAccessorio(4, "Kong Classic", 12.99, $categoriaGiochi, "Gomma");

function stampaCardProdotto($prodotto, $imgUrl)
{
  echo "
    <div style='border: 1px solid #ccc; padding: 10px; margin: 10px; text-align: center;'>
        <img src='$imgUrl' alt='$prodotto->nome' style='max-width: 100%; height: auto;'>
        <h3>$prodotto->nome</h3>
        <p>Prezzo: $prodotto->prezzo €</p>
        <p>Categoria: $prodotto->categoria</p>";

  if ($prodotto instanceof ProdottoAlimentare) {
    echo "<p>Tipo: $prodotto->tipo</p>";
  } elseif ($prodotto instanceof ProdottoAccessorio) {
    echo "<p>Materiale: $prodotto->materiale</p>";
  }

  echo "</div>";
}

stampaCardProdotto($royalCanin, "https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000");
stampaCardProdotto($almoNature, "https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg");
stampaCardProdotto($volieraWilma, "https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg");
stampaCardProdotto($kongClassic, "https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg");
