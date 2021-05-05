const spells = [


stir_the_air = {
    Name:"STIR THE AIR",
    Tradition:"AIR",
    Rank:"0",
    Label:"UTILITY",
    Requirement:null,
    Area:"A sphere with a 2-yard radius centered on a point you can reach",
    Target:"",
    Duration:"1 minute",
    Description:"You create a light breeze in the area, which moves with you for the duration. The breeze clears away odors and dust, scatters lightweight objects such as papers, extinguishes candles, and causes larger flames to flicker and dance. Creatures in the area that attack you with thrown or ranged weapons make their attack rolls with 1 bane.",
    Triggered:null,
    Sacrifice:null,
    Permanence:null,
    Aftereffect:null,
    Special:null,
    TwentyPlus:null,
    Roll:null,
    Save :null,
    Afflictions:null,
    Damage:null,
    Tags:"bane",
    Range:"Reach",
    Radius:"2-yard",
    Type:"Buff"

},

wind_blast = {
    Name:"WIND BLAST",
    Tradition:"AIR",
    Rank:"0",
    Label:"ATTACK",
    Requirement:null,
    Area:null,
    Target:"One creature or object within short range",
    Duration:null,
    Description:"A powerful wind assails the target. Make a Will attack roll against the target’s Strength. On a success, the wind moves the target 1d6 yards away from you.",
    Triggered:null,
    Sacrifice:null,
    Permanence:null,
    Aftereffect:null,
    Special:null,
    TwentyPlus:"The target falls prone at the end of this movement.",
    Roll:"Will against Strength",
    Save :null,
    Afflictions:"Prone",
    Damage:"1d6",
    Tags:"mono",
    Range:"Short range",
    Radius:null,
    Type:"Attack"

},

evoke_gale = {
    Name:"EVOKE GALE",
    Tradition:"AIR",
    Rank:"1",
    Label:"ATTACK",
    Requirement:null,
    Area:"A cone, 3 yards long, originating from a point within short range",
    Target:null,
    Duration:null,
    Description:"A howling wind disperses vapors, fog, smoke, and gas from the area. Unprotected flames gutter out, and lightweight objects are blown to the nearest edge of the area. Each creature in the area must get a success on a Strength challenge roll or be moved 1d6 yards away from the origin point. Flying creatures make the roll with 1 bane.",
    Triggered:null,
    Sacrifice:null,
    Permanence:null,
    Aftereffect:null,
    Special:null,
    TwentyPlus:null,
    Roll:null,
    Save :"Strength, with 1 bane if flying",
    Afflictions:null,
    Damage:null,
    Tags:"knockback",
    Range:"Short range",
    Radius:"3-yard",
    Type:"Control"

},

flense = {
    Name:"FLENSE",
    Tradition:"AIR",
    Rank:"1",
    Label:"ATTACK",
    Requirement:null,
    Area:null,
    Target:"One creature or object within short range",
    Duration:null,
    Description:"Windborne grit scours your target. Make a Will attack roll against the target’s Strength. On a success, the target takes 2d6 + 3 damage. A living creature that becomes incapacitated by this damage dies instantly, its flesh (if any) stripped from its bones.",
    Triggered:null,
    Sacrifice:null,
    Permanence:null,
    Aftereffect:null,
    Special:null,
    TwentyPlus:"The target takes 2d6 extra damage.",
    Roll:"Will against Strength",
    Save :null,
    Afflictions:null,
    Damage:"2d6 + 3 ",
    Tags:"lethal,mono",
    Range:"Short range",
    Radius:null,
    Type:"Attack"

},

glide = {
    Name:"GLIDE",
    Tradition:"AIR",
    Rank:"1",
    Label:"UTILITY",
    Requirement:null,
    Area:null,
    Target:"One creature within long range",
    Duration:"1 minute",
    Description:null,
    Triggered:"You use a triggered action to cast this spell when you see the target fall. For the duration, the target takes no damage from landing after a fall. If it continues to fall after the effect ends, it takes damage based on where it continues falling from.",
    Sacrifice:null,
    Permanence:null,
    Aftereffect:null,
    Special:null,
    TwentyPlus:null,
    Roll:null,
    Save :null,
    Afflictions:null,
    Damage:null,
    Tags:"fall",
    Range:"Long range",
    Radius:null,
    Type:null

},

still_the_air = {
    Name:"STILL THE AIR",
    Tradition:"AIR",
    Rank:"2",
    Label:"UTILITY",
    Requirement:null,
    Area:"A sphere with a 4-yard radius centered on a point within medium range",
    Target:null,
    Duration:"1 hour",
    Description:"For the duration, no sound emanates from or reaches into the area. Creatures in the area are deafened and are immune to any sound-based attack, such as the thunderclap spell.",
    Triggered:null,
    Sacrifice:null,
    Permanence:null,
    Aftereffect:null,
    Special:null,
    TwentyPlus:null,
    Roll:null,
    Save :null,
    Afflictions:"Deafened",
    Damage:null,
    Tags:"sound",
    Range:null,
    Radius:"4-yard",
    Type:"Utility"

},

thunderclap = {
    Name:"THUNDERCLAP",
    Tradition:"AIR",
    Rank:"2",
    Label:"ATTACK",
    Requirement:null,
    Area:"A sphere with a 10-yard radius centered on a point within medium range",
    Target:null,
    Duration:null,
    Description:"A wave of thunderous noise spreads out from the center of the area, dealing 1d6 + 1 damage to everything in it. Each creature in the area must make a Strength challenge roll, taking half the damage on a success. On a failure, the creature also becomes deafened for 1 minute.",
    Triggered:null,
    Sacrifice:null,
    Permanence:null,
    Aftereffect:null,
    Special:null,
    TwentyPlus:null,
    Roll:null,
    Save :"Strength",
    Afflictions:"Deafened",
    Damage:"1d6+1",
    Tags:"aoe,sound",
    Range:"Medium range",
    Radius:"10-yard",
    Type:"Attack"
    

},

bestow_flight = {
    Name:"BESTOW FLIGHT",
    Tradition:"AIR",
    Rank:"3",
    Label:"UTILITY",
    Requirement:null,
    Area:null,
    Target:"One creature you can reach",
    Duration:"1 hour",
    Description:"You touch the target. It can fly at its normal Speed for the duration.",
    Triggered:null,
    Sacrifice:null,
    Permanence:null,
    Aftereffect:null,
    Special:null,
    TwentyPlus:null,
    Roll:null,
    Save :null,
    Afflictions:null,
    Damage:null,
    Tags:"fly",
    Range:"Reach",
    Radius:null,
    Type:"Buff"

},

fling = {
    Name:"FLING",
    Tradition:"AIR",
    Rank:"3",
    Label:"ATTACK",
    Requirement:null,
    Area:"A cylinder, 4 yards tall with a radius of 4 yards, centered on a point within long range",
    Target:null,
    Duration:null,
    Description:"A powerful blast of wind erupts from the origin point. Each creature in the area must make a Strength challenge roll; Size 1 or smaller creatures make the roll with 1 bane. On a failure, it falls prone and is moved 5d6 yards away from the origin point. If it encounters a solid surface before moving the full distance, it and the surface it strikes each take 1d6 damage plus 1d6 extra damage per 5 yards remaining in this movement (round down).",
    Triggered:null,
    Sacrifice:null,
    Permanence:null,
    Aftereffect:null,
    Special:null,
    TwentyPlus:null,
    Roll:null,
    Save :"Strength, with 1 bane if Size 1 or smaller",
    Afflictions:"Prone",
    Damage:null,
    Tags:"aoe,knockback",
    Range:"Long range",
    Radius:"4-yard",
    Type:"Control"

},

create_cyclone = {
    Name:"CREATE CYCLONE",
    Tradition:"AIR",
    Rank:"4",
    Label:"ATTACK",
    Requirement:null,
    Area:"A line, 20 yards long, 10 yards high, and 2 yards wide originating from a point within long range",
    Target:null,
    Duration:null,
    Description:"A powerful whirlwind appears at one end of the area and moves along and through it, dealing 3d6 damage to anything whose space it enters. Each unsecured object damaged in this way is moved 1d6 yards in a direction you choose. Each creature damaged in this way must make a Strength challenge roll. On a failure, it is moved 1d6 yards in a direction you choose and falls prone. On a success, it just takes half the damage.",
    Triggered:null,
    Sacrifice:null,
    Permanence:null,
    Aftereffect:null,
    Special:null,
    TwentyPlus:null,
    Roll:null,
    Save :"Strength",
    Afflictions:"Prone",
    Damage:"3d6",
    Tags:"aoe,knockback",
    Range:"Long range",
    Radius:"20-yard",
    Type:"Attack"

},

bind_wind_genie = {
    Name:"BIND WIND GENIE",
    Tradition:"AIR",
    Rank:"5",
    Label:"UTILITY",
    Requirement:null,
    Area:null,
    Target:"A cube of air, 2 yards on a side, originating from a point within long range",
    Duration:null,
    Description:"At the end of the round in which you cast this spell, the target cube becomes a Size 2 wind genie. You cannot voluntarily end this spell. When the genie appears, make a Will attack roll against its Will. The genie becomes compelled for the duration on a success, or becomes hostile to you on a failure.",
    Triggered:null,
    Sacrifice:null,
    Permanence:null,
    Aftereffect:null,
    Special:null,
    TwentyPlus:null,
    Roll:"Will against Will",
    Save :null,
    Afflictions:null,
    Damage:null,
    Tags:"unsafe",
    Range:"Long range",
    Radius:null,
    Type:"Summon"

},

comprehension = {
    Name:"COMPREHENSION",
    Tradition:"ALTERATION",
    Rank:"0",
    Label:"UTILITY",
    Requirement:null,
    Area:null,
    Target:"One creature you can reach",
    Duration:"Concentration, up to 1 minute",
    Description:"You touch the target. Provided it knows at least one language, you can communicate with the target for the duration while you maintain physical contact with it, regardless of whether you share any languages.",
    Triggered:null,
    Sacrifice:null,
    Permanence:null,
    Aftereffect:null,
    Special:null,
    TwentyPlus:null,
    Roll:null,
    Save :null,
    Afflictions:null,
    Damage:null,
    Tags:"language",
    Range:"Reach",
    Radius:null,
    Type:"Utility"
},

distort_appearance = {
    Name:"DISTORT APPEARANCE",
    Tradition:"ALTERATION",
    Rank:"0",
    Label:"UTILITY",
    Requirement:null,
    Area:null,
    Target:"One creature you can reach",
    Duration:"1 minute",
    Description:"You touch the target, causing it to appear indistinct. For the duration, when the target attempts to hide, it makes the Agility challenge roll with 1 boon and creatures that can see the target and attack its Defense or Agility make their attack rolls with 1 bane.",
    Triggered:null,
    Sacrifice:null,
    Permanence:null,
    Aftereffect:null,
    Special:null,
    TwentyPlus:null,
    Roll:null,
    Save :null,
    Afflictions:null,
    Damage:null,
    Tags:"boon,bane",
    Range:"Reach",
    Radius:null,
    Type:"Buff"

},

enhance_senses = {
    Name:"ENHANCE SENSES",
    Tradition:"ALTERATION",
    Rank:"1",
    Label:"UTILITY",
    Requirement:null,
    Area:null,
    Target:"One creature you can reach",
    Duration:"1 hour",
    Description:"You touch the target. For the duration, it gains a +5 bonus to Perception and can see in areas obscured by shadows or darkness as if those areas were lit; however, it makes challenge rolls with 1 bane to resist becoming blinded or deafened.",
    Triggered:null,
    Sacrifice:null,
    Permanence:null,
    Aftereffect:null,
    Special:null,
    TwentyPlus:null,
    Roll:null,
    Save :null,
    Afflictions:null,
    Damage:null,
    Tags:"perBuff,darksight,selfBane",
    Range:"Reach",
    Radius:null,
    Type:"Utility"

},

spider_climb = {
    Name:"SPIDER CLIMB",
    Tradition:"ALTERATION",
    Rank:"1",
    Label:"UTILITY",
    Requirement:null,
    Area:null,
    Target:"One creature you can reach",
    Duration:"1 hour",
    Description:"You touch the target. For the duration, it can move at its Speed across walls, ceilings, and overhangs, and it never needs to make a challenge roll to climb.",
    Triggered:null,
    Sacrifice:null,
    Permanence:null,
    Aftereffect:null,
    Special:null,
    TwentyPlus:null,
    Roll:null,
    Save :null,
    Afflictions:null,
    Damage:null,
    Tags:"climb",
    Range:"Reach",
    Radius:null,
    Type:"Utility"

},

underwater_adaptation = {
    Name:"UNDERWATER ADAPTATION",
    Tradition:"ALTERATION",
    Rank:"1",
    Label:"UTILITY",
    Requirement:null,
    Area:null,
    Target:"One creature you can reach",
    Duration:"1 hour",
    Description:"You touch the target. For the duration, it can breathe water as easily as it breathes air, moves at full Speed while swimming, and never needs to make a challenge roll to swim.",
    Triggered:null,
    Sacrifice:null,
    Permanence:null,
    Aftereffect:null,
    Special:null,
    TwentyPlus:null,
    Roll:null,
    Save :null,
    Afflictions:null,
    Damage:null,
    Tags:"breathe",
    Range:"Reach",
    Radius:null,
    Type:"Utility"

},

bolster_attribute = {
    Name:"BOLSTER ATTRIBUTE",
    Tradition:"ALTERATION",
    Rank:"2",
    Label:"UTILITY",
    Requirement:null,
    Area:null,
    Target:"One creature you can reach",
    Duration:"1 minute",
    Description:"You touch the target. Choose Strength, Agility, Intellect, or Will. For the duration, when the target makes an attack roll or challenge roll using the chosen attribute, it makes the roll with 1 boon.",
    Triggered:null,
    Sacrifice:null,
    Permanence:null,
    Aftereffect:null,
    Special:null,
    TwentyPlus:null,
    Roll:null,
    Save :null,
    Afflictions:null,
    Damage:null,
    Tags:"boon",
    Range:"Reach",
    Radius:null,
    Type:"Buff"

},

bolster_defense = {
    Name:"BOLSTER DEFENSE",
    Tradition:"ALTERATION",
    Rank:"2",
    Label:"UTILITY",
    Requirement:null,
    Area:null,
    Target:"One creature you can reach",
    Duration:"1 minute",
    Description:"You touch the target. For the duration, the target gains a +5 bonus to Health, and attack rolls against the target are made with 1 bane.",
    Triggered:null,
    Sacrifice:null,
    Permanence:null,
    Aftereffect:null,
    Special:null,
    TwentyPlus:null,
    Roll:null,
    Save :null,
    Afflictions:null,
    Damage:null,
    Tags:"healthBuff,bane",
    Range:"Reach",
    Radius:null,
    Type:"Buff"

},

alter_size = {
    Name:"ALTER SIZE",
    Tradition:"ALTERATION",
    Rank:"3",
    Label:"UTILITY",
    Requirement:null,
    Area:null,
    Target:"One creature you can reach",
    Duration:"1 minute",
    Description:"You touch the target, which grows or shrinks and remains at its new Size for the duration. Everything the target wears and carries also grows or shrinks to accommodate the new form, though if such an object leaves the target’s possession it immediately returns to its normal size. If the target grows, its Size doubles and it gains a +10 bonus to Health. Its weapon attacks deal 1d6 extra damage if its new Size is 3 or less, or 2d6 extra damage if its new Size is 4 or more. If the space the target occupies is not large enough to accommodate its new Size, the target takes 5d6 damage and the effect ends immediately. If the target shrinks, its Size is halved. It deals half damage with weapon attacks, makes Strength attack rolls and challenge rolls with 1 bane, and makes Agility attack rolls and challenge rolls with 1 boon.",
    Triggered:null,
    Sacrifice:null,
    Permanence:null,
    Aftereffect:null,
    Special:null,
    TwentyPlus:null,
    Roll:null,
    Save :null,
    Afflictions:null,
    Damage:null,
    Tags:"size,healthBuff,wepAtkBuff,debuff,boon,bane",
    Range:"Reach",
    Radius:null,
    Type:"Buff"

},

regeneration = {
    Name:"REGENERATION",
    Tradition:"ALTERATION",
    Rank:"3",
    Label:"UTILITY",
    Requirement:null,
    Area:null,
    Target:"One living creature you can reach",
    Duration:"1 minute",
    Description:"You touch the target. At the end of each round for the duration, the target heals damage equal to half its healing rate.",
    Triggered:null,
    Sacrifice:null,
    Permanence:null,
    Aftereffect:null,
    Special:null,
    TwentyPlus:null,
    Roll:null,
    Save :null,
    Afflictions:null,
    Damage:null,
    Tags:"hot",
    Range:"Reach",
    Radius:null,
    Type:"Heal"

},

malleability = {
    Name:"MALLEABILITY",
    Tradition:"ALTERATION",
    Rank:"4",
    Label:"UTILITY",
    Requirement:null,
    Area:null,
    Target:"One creature you can reach",
    Duration:"1 hour",
    Description:"You touch the target. For the duration, it can move at its full Speed across difficult terrain, move through spaces occupied by other creatures regardless of their Size, and move freely through openings at least 1 inch wide. As well, for the duration, the target cannot fall prone and is immune to the grabbed, immobilized, and slowed afflictions.",
    Triggered:null,
    Sacrifice:null,
    Permanence:null,
    Aftereffect:null,
    Special:null,
    TwentyPlus:null,
    Roll:null,
    Save :null,
    Afflictions:"Grabbed,Prone,Immobilized,Slowed",
    Damage:null,
    Tags:"immune,move",
    Range:"Reach",
    Radius:null,
    Type:"Utility"

},

awaken_potential = {
    Name:"AWAKEN POTENTIAL",
    Tradition:"ALTERATION",
    Rank:"5",
    Label:"UTILITY",
    Requirement:null,
    Area:null,
    Target:"One creature you can reach",
    Duration:"1 hour",
    Description:"You touch the target. Choose Strength, Agility, Intellect, or Will and roll 1d6. The target gains a bonus to the chosen attribute score equal to the number rolled, up to a maximum score of 20, for the duration. The increase also affects any characteristic associated with the attribute.",
    Triggered:null,
    Sacrifice:null,
    Permanence:null,
    Aftereffect:null,
    Special:null,
    TwentyPlus:null,
    Roll:null,
    Save :null,
    Afflictions:null,
    Damage:null,
    Tags:"atrBuff",
    Range:"Reach",
    Radius:null,
    Type:"Buff"

},

  /*  
template = {
        Name:null,
        Tradition:null,
        Rank:null,
        Label:null,
        Requirement:null,
        Area:null,
        Target:null,
        Duration:null,
        Description:null,
        Triggered:null,
        Sacrifice:null,
        Permanence:null,
        Aftereffect:null,
        Special:null,
        TwentyPlus:null,
        Roll:null,
        Save :null,
        Afflictions:null,
        Damage:null,
        Tags:null,
        Range:null,
        Radius:null,
        Type:null
    
},*/

]


/////INITIALIZATION/////

//La div dans laquel afficher les sorts
const mainDisplay = document.getElementById("main");

/////MECHANICS/////

/**
 * Affiche une boîte d'information sur un spell donné
 * @param {*} spell Le spell a afficher
 * @param {*} display La div dans la quel afficher le sort
 */
function createSpellBox(spell, display){
    let box = createDiv("spellbox");
    display.appendChild(box);

    box.appendChild(createSpellHeader(spell));

   
    let specs = document.createElement("div");
    specs.className = "spellspecs";
    box.appendChild(specs);

    if(spell.requirement){
        let requirement = document.createElement("p");
        requirement.innerHTML = "<b>Requirement</b> " + spell.requirement;
        specs.appendChild(requirement);
    }

    if(spell.Area){
        let area = document.createElement("p");
        area.innerHTML = "<b>Area</b> " + spell.Area;
        specs.appendChild(area);
    }

    if(spell.Target){
        let target = document.createElement("p");
        target.innerHTML = "<b>Target</b> " + spell.Target;
        specs.appendChild(target);
    }

    if(spell.Duration){
        let duration = document.createElement("p");
        duration.innerHTML = "<b>Duration</b> " + spell.Duration;
        specs.appendChild(duration);
    }

    let description = document.createElement("div");
    description.innerText = spell.Description;
    box.appendChild(description);

    if(spell.Triggered){
        let triggered = document.createElement("p");
        triggered.innerHTML = "<b>Triggered</b> " + spell.Triggered;
        description.appendChild(triggered);
    }

    if(spell.Sacrifice){
        let sacrifice = document.createElement("p");
        sacrifice.innerHTML = "<b>Sacrifice</b> " + spell.Sacrifice;
        description.appendChild(sacrifice);
    }

    if(spell.Permanence){
        let permanence = document.createElement("p");
        permanence.innerHTML = "<b>Permanence</b> " + spell.Permanence;
        description.appendChild(permanence);
    }

    if(spell.Aftereffect){
        let aftereffect = document.createElement("p");
        aftereffect.innerHTML = "<b>Aftereffect</b> " + spell.Aftereffect;
        description.appendChild(aftereffect);
    }

    if(spell.Special){
        let special = document.createElement("p");
        special.innerHTML = "<b>Aftereffect</b> " + spell.Special;
        description.appendChild(special);
    }

    if(spell.TwentyPlus){
        let twentyPlus = document.createElement("p");
        twentyPlus.innerHTML = "<b>Attack Roll 20+</b> " + spell.TwentyPlus;
        description.appendChild(twentyPlus);
    }
}

/**
 * 
 */
function deleteAllSpellBox(){
    let main = document.getElementById("main");

    while(main.firstChild){
        main.removeChild(main.firstChild);
    }
}


/**
 * Créer une div avec un nom de classe donnée
 * @param {*} className 
 * @returns 
 */
function createDiv(className){
    let box = document.createElement("div");
    box.className = className;
    return box;
}


/**
 * 
 * @param {*} text 
 */
function createParagraph(text, className){
    let paragraph = document.createElement("p");
    paragraph.className = className;
    paragraph.innerHTML=text;
    return paragraph
}

/**
 * Crée un header pour la boîte a spell
 * @param {*} spell Le spell pour lequel créer le header
 */
function createSpellHeader(spell){
    let header =  createDiv("spellheader");
    let label = spell.Tradition + " " + spell.Label + " " + spell.Rank;

    header.appendChild(createParagraph(spell.Name,"name"))
    header.appendChild(createParagraph(label));

    return header
}

/**
 * Crée la barre de specs pour un sort
 * @param {*} spell Le sort pour lequel crée la barre de specs
 */
function createSpellSpecs(spell){

}

/**
 * Crée un description pour un sort donné
 * @param {*} spell Le sort pour lequel crée la description
 */
function createSpellDescription(spell){

}

/**
 * Fills a select with a specific IDs with all possible values of a key of a spell
 */
function fillSelect(key,selectID){

    let options = [];
    let select = document.getElementById(selectID);

    spells.forEach(spell=> {
        
   if(spell[key] != null) {

        if(!options.includes(spell[key])) options.push(spell[key]);
   }
        
    })

    options.forEach(option => {
        let newOption = document.createElement("option");
        newOption.value= option;
        newOption.innerHTML = option;
        select.appendChild(newOption);
    })
}

/**
 * Fills all selects with the needed info
 */
function fillAllSelects(){

    fillSelect("Tradition","traditions");
    fillSelect("Rank","rank");
    fillSelect("Duration","duration");
    fillSelect("Range","range");
    fillSelect("Radius","radius");
    fillSelect("Type","type");
    fillSelect("Afflictions","affliction");
    fillSelect("Damage","damage");
}

/**
 * Cette fonction renvois une liste de tout les sorts correspondant au critères de slection de l'utilisateur
 */
function getAviableSpells(filter){
    let aviableSpells = [];

    spells.forEach(spell=>{
        let canAdd = true;
        Object.keys(filter).forEach(key=>{
            if(filter[key] != spell[key]){
                canAdd = false;
            }
        })
        if (canAdd) aviableSpells.push(spell);
    })

    return aviableSpells;
}

/**
 * Cette fonction revoit un objet avec les clées au valeur a filtrer
 */
function getFilter(){
    let filters = document.getElementsByTagName("select");
    let objFilter = {};

    for(let filter of filters){
        if(filter.value){
            let temp = {[filter.name] : filter.value};
            Object.assign(objFilter,temp);
        }
    }
    return objFilter;
}

document.getElementById("filter").addEventListener("click",()=>{
    deleteAllSpellBox();
   getAviableSpells(getFilter()).forEach(spell=>{
       createSpellBox(spell,mainDisplay);
   })
})

fillAllSelects();

spells.forEach( spell => {createSpellBox(spell,mainDisplay);})

