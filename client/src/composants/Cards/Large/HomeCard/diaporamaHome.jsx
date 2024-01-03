// Diaporamahome.js
import React, { useState, useEffect } from "react";
import image1 from '../../../../ressources/AdobeStock_267287293.jpeg';
import image2 from '../../../../ressources/AdobeStock_115209041.jpeg';
import image3 from '../../../../ressources/AdobeStock_476009856.jpeg';
import HomeLogo from "../../../Molecule/Icon/homeLogo";

function Diaporamahome() {
  const [indexActuel, setIndexActuel] = useState(0);
  const images = [ image1, image2, image3 ]; //... autres images

  useEffect(() => {
    const timer = setTimeout(() => {
      setIndexActuel((prevIndex) => (prevIndex + 1) % images.length);
    }, 5000); // Change l'image toutes les 5 secondes
    return () => clearTimeout(timer);
  }, [indexActuel, images.length]);

  return (
    <div className="relative w-screen h-48 shadow-lg md:h-56">
      <img src={images[indexActuel]} alt={`Diapositive ${indexActuel + 1}`} className="w-full h-full object-cover" />
      <div className="absolute inset-0 flex justify-center items-center top-48 ">
        <HomeLogo />
      </div>
    </div>
  );
}

export default Diaporamahome;