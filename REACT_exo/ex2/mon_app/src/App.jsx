import {React, useState, useEffect} from 'react';

import './App.css'

const App = (props) => {

  const [nom, setNom] = useState("");

  const [prenom, setPrenom] = useState("");

  const [compteur, setCompteur] = useState(0);

  const [element, setElement] = useState("");

  const [liste, setListe] = useState([""]);

  const handleClick = (event) => {
    console.log("clique")
    setCompteur(compteur+1)
  }

  useEffect(() => {
      console.log("useEffect 2 ...")
  }, [nom])

  useEffect(() => {
      console.log("useEffect 1 ...")
  }, [])

  const handleChangeNom = (evt) => {
    setNom(evt.target.value);
  }

  const handleChangePrenom = (evt) => {
    setPrenom(evt.target.value);
  }


  const handleClick2 = (e) => {
    console.log("clique " + element)
    setListe([...liste, element])
  }

  console.log("render App...");

  return (
    <div>
        <div>
            Bonjour {nom} {prenom}
        </div>
        <input type="text" value={nom} onChange={handleChangeNom}/>
        <input type="text" value={prenom} onChange={handleChangePrenom}/>
    
      
      <hr />
      {compteur}
      <hr />
      <button onClick={handleClick}>Clique moi ! {compteur}</button>

      App3
      <hr />
      <input type="text" value={element} onChange={(e)=>{setElement(e.target.value)}}/>
      <button onClick={handleClick2}>Ajouter</button>
      <hr />
      { liste.map( (elt, index) => (
          <div key={index}>
              {elt}
          </div>        
      ) )}





    </div>




    );



}
export default App