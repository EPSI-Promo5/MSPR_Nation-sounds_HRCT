import React from "react";
import { DiscoverCards } from "./DiscoverCard.component";
import DiscoverImage from '../../ressources/discover.jpg';
import ProgrammationImage from '../../ressources/ArtistesCard.jpeg';
import BilletterieImage from '../../ressources/billetterie.jpg';

const textDiscover = {
    Question: "Découvrez Nations Sounds, le festival de musique incontournable de Paris ! Plongez dans une expérience musicale unique au cœur de la Ville Lumière. Pour toutes questions pratiques, c'est par ici !",

    Programmation: "Découvrez la diversité musicale de Nations Sounds ! Des artistes de tous les horizons se réunissent pour vous offrir une expérience inoubliable. Consultez notre programmation maintenant ! ",

    Billetterie: "La billetterie pour Nations Sounds est ouverte jusqu'au 30/07/2026 ! Ne manquez pas l'opportunité de vivre une expérience musicale exceptionnelle au cœur de Paris."
}

export const HomeContent = () => {
    return (
        <>
            <div className="h-full flex flex-col overflow-y-auto">
            
                    <DiscoverCards title="AIDES ET QUESTIONS" text={textDiscover.Question} linkTo="/infos-pratiques" imageSrc={DiscoverImage} />
            
           
                    <DiscoverCards title="PROGRAMMATION" text={textDiscover.Programmation} linkText="Découvrir notre festival" linkTo="/discover" imageSrc={ProgrammationImage} />
              
              
                    <DiscoverCards title="BILLETTERIE" text={textDiscover.Billetterie} linkText="Acheter un billet" linkTo="/billetterie" imageSrc={BilletterieImage} />
           
            </div>
        </>
    );
};
