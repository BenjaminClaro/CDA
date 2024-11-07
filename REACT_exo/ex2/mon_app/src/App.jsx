import {React, useState, useEffect} from 'react';

import './App.css'

const App = (props) => {

  const [nom, setNom] = useState("");

  const [prenom, setPrenom] = useState("");

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

  console.log("render App...");

  return (
    <div>
        <div>
            Bonjour {nom} {prenom}
        </div>
        <input type="text" value={nom} onChange={handleChangeNom}/>
        <input type="text" value={prenom} onChange={handleChangePrenom}/>
    </div>
);
}



export default App