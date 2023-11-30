<?php 

function formatRupiah($nominal)
{
    return "Rp. " . number_format($nominal, 0, ',', '.' );
}
