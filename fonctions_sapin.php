<?php

	//n est le nombre de branche du sapin.
	//taille est la hauteur de la branche.
	//epaisseur est la proportion d'étoile ajoutée à chaque nouvelle branche (rendant l'arbre plus épais).
	//inclinaison est le nombre d'étoile par ligne en plus.
	function Sapin($n,$taille,$epaisseur,$inclinaison)
	{
		$vide = $taille*$inclinaison*$n - ( $taille*$inclinaison - ($epaisseur) )*($n-1); 		//calcul des vides pour construire le sapin entier
		/*for ($i = 0; $i< $vide; $i++)
			echo "&#8194";							//espace pris en compte (de même dimension que l'étoile)
		echo '<p style="color:gold">*</p>'."<br/>";*/
		etoile($vide);
		for ($i = 0; $i< $vide; $i++)
			echo "&#8194";							//espace pris en compte (de même dimension que l'étoile)
		echo '<p style="color:green">*</p>'."<br/>";
		for ($i = 0; $i<$n; $i++)										
		{
			branche($taille,$epaisseur,$i,$inclinaison,$vide);
		}
		tronc($epaisseur,$epaisseur,$vide);
	}




	//position permet de gérer l'avancement de la branche par rapport au centre du sapin. Il s'agit en fait de la branche que l'on construit (0 étant le sommet et n la base)
	function branche($taille,$epaisseur,$position,$inclinaison,$vide)
	{
		for ($j = 1; $j <= $taille; $j++)							
		{
			for ($k = 0; $k< $vide-$j*$inclinaison-$epaisseur*$position; $k++)
				echo "&#8194";								//espace pris en compte (de même dimension que l'étoile)
			/*if (fmod($j, 2) == 0) echo '<p  style="color:green">';
			else echo '<p style="color:red">';*/
			echo '<p style="color:green">';
			$cpt = 0;												//initialisation du compteur pour placer la guirlande.
			$max = $epaisseur*$position*2 + $j + $inclinaison*2;	//épaisseur totale de la ligne
			$pourcent = ($taille - $j + 1)/$taille;					//pourcentage pour placer les éléments en couleur sur cette ligne (au début, à la fin ou quelque part au milieu)
			$nombre = $max/$taille;									//nombre d'étoiles concernée pour cette ligne.
			$nombre_max = ($j-1)*$nombre;							//permet d'épaissire la guirlande.
			if ($j-1 >2) $nombre_max = 2*$nombre;
			for ($k = 0; $k<=$epaisseur*$position*2; $k++)						
			{
				$cpt++;
				if ($cpt > $pourcent*$max-$nombre && $cpt <= $pourcent*$max+$nombre_max && $position != 0)
				{
					echo '</p><p  style="color:red">*</p><p style="color:green">';
				}
				else echo "*";
			}
			for ($k = 0; $k < $j; $k++)								
			{
				for ($l = 1; $l<=$inclinaison*2; $l++)
				{	
					$cpt++;
					if ($cpt > $pourcent*$max-$nombre && $cpt <= $pourcent*$max+$nombre_max && $position != 0)
					{
						echo '</p><p  style="color:red">*</p><p style="color:green">';
					}
					else echo "*";
				}
			}
			echo "</p>";
			echo "<br/>";
		}
	}



	function tronc($hauteur,$epaisseur,$vide)
	{
		echo '<p style="color:brown">';
		for ($i = 0; $i<$hauteur; $i++)
		{
			for ($j = 0; $j< $vide-$epaisseur; $j++)
				echo "&#8194";							//espace pris en compte (de même dimension que l'étoile)
			for ($j = 0; $j<$epaisseur*2; $j++)
				echo "#";
			echo "<br/>";
		}
		echo '</p>';
		echo "<br/>";
	}




	function etoile($vide)
	{
		echo '<p style="color:gold">';
		for ($i = 0; $i< 3; $i++)
		{
			for ($j = 0; $j< $vide-$i; $j++)
				echo "&#8194";							//espace pris en compte (de même dimension que l'étoile)
			for ($j = 0; $j< 2*$i+1; $j++)
				echo "*";
			echo "<br/>";
		}

		for ($i = 0; $i< 4; $i++)
		{
			for ($j = 0; $j< $vide-10+2*$i; $j++)
				echo "&#8194";							
			for ($j = 0; $j< 21-4*$i; $j++)
				echo "*";
			echo "<br/>";
		}

			for ($j = 0; $j< $vide-6; $j++)
				echo "&#8194";							
			for ($j = 0; $j< 13; $j++)
				echo "*";
			echo "<br/>";

			for ($j = 0; $j< $vide-7; $j++)
				echo "&#8194";							
			for ($j = 0; $j< 6; $j++)
				echo "*";
			for ($j = 0; $j< 3; $j++)
				echo "&#8194";							
			for ($j = 0; $j< 6; $j++)
				echo "*";
			echo "<br/>";

			for ($j = 0; $j< $vide-8; $j++)
				echo "&#8194";							
			for ($j = 0; $j< 5; $j++)
				echo "*";
			for ($j = 0; $j< 7; $j++)
				echo "&#8194";							
			for ($j = 0; $j< 5; $j++)
				echo "*";
			echo "<br/>";

			for ($j = 0; $j< $vide-9; $j++)
				echo "&#8194";							
			for ($j = 0; $j< 3; $j++)
				echo "*";
			for ($j = 0; $j< 13; $j++)
				echo "&#8194";							
			for ($j = 0; $j< 3; $j++)
				echo "*";
			echo "<br/>";
		echo '</p>';
	}
	
?>