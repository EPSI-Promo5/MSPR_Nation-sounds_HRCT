import React from 'react';

const Footer = () => {
  return (
    <footer className="bg-gray-800 text-white py-8">
      <div className="container mx-auto px-4">
        <div className="flex flex-col md:flex-row justify-between">
          {/* Première partie */}
          <div className="mb-6 md:mb-0">
            <h4 className="text-lg font-semibold mb-4">Contactez-nous</h4>
            <p className="mb-2">Email : nationsounds@epsi.fr</p>
            <p className="mb-2">Tel : +33 (0)3 20 21 22 23 24 </p>
            <p>Addresse : 123 Rue du son, 75000 Paris , France</p>
          </div>
          {/* Deuxième partie */}
          <div className="mb-6 md:mb-0">
            <h4 className="text-lg font-semibold mb-4">Quick Links</h4>
            <ul>
              <li><a href="/faq" className="hover:underline">FAQ</a></li>
              <li><a href="/conditions" className="hover:underline">Conditions Générales et RGPD</a></li>
            </ul>
          </div>
          {/* Troisième partie */}
          <div>
            <h4 className="text-lg font-semibold mb-4">Follow Us</h4>
            <div className="flex space-x-4">
              <a href="#" className="hover:text-gray-400">Facebook</a>
              <a href="#" className="hover:text-gray-400">Twitter</a>
              <a href="#" className="hover:text-gray-400">Instagram</a>
              <a href="#" className="hover:text-gray-400">LinkedIn</a>
            </div>
          </div>
        </div>
        <div className="mt-8 text-center border-t border-gray-700 pt-4">
          <p>&copy; 2024 HRCT. All rights reserved.</p>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
