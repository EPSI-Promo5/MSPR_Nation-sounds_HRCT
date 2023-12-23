import React, { useState, useEffect } from "react";
import image1 from '../../../../ressources/AdobeStock_267287293.jpeg';
import image2 from '../../../../ressources/AdobeStock_115209041.jpeg';
import image3 from '../../../../ressources/AdobeStock_476009856.jpeg';
import HomeLogo from "../../../Molecule/Icon/homeLogo";

function Diaporamahome() {
  const [indexActuel, setIndexActuel] = useState(0);

  // Votre tableau d'images
  const images = [
    image1,
    image2,
    image3,
    // Ajoutez d'autres images si nécessaire
  ];

  // Utilisation de useEffect pour changer l'image après un délai
  useEffect(() => {
    const timer = setTimeout(() => {
      setIndexActuel((prevIndex) => (prevIndex + 1) % images.length);
    }, 5000); // Change l'image toutes les 5 secondes

    return () => clearTimeout(timer);
  }, [indexActuel, images.length]);

  return (
    <div className="w-full h-52 shadow-lg overflow-hidden">
      <img src={images[indexActuel]} alt={`Diapositive ${indexActuel + 1}`} className="w-full h-full object-cover" />
    </div>
   
  );
}

export default Diaporamahome;
