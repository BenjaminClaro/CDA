import {React, useState, useEffect} from 'react';

import './App.css'

const App = (props) => {

  const [nom, setNom] = useState("");

  useEffect(() => {
      console.log("useEffect 2 ...")
  }, [nom])

  useEffect(() => {
      console.log("useEffect 1 ...")
  }, [])

  const handleClick1 = () => {
      setNom(Math.random().toString(36).replace(/[^a-z]+/g, ''));
  }

  console.log("render App...");

  return (
      <>
          <div>
              {nom}
          </div>
          <button onClick={handleClick1}>change nom</button>
      </>
  );
}



export default App
