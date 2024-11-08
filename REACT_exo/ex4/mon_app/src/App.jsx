import {React, useState, useEffect} from 'react';
import DataTable from "react-data-table-component";

import './App.css'

const App = () => {

  
  fetch("/user?ID=12345")
  .then( (response) => {
      return response.json(); // pour consommer des données au format json
      // return response.text(); // pour consommer des données au format text
      // return response.blob(); // pour consommer des données au format binary large object (des images)
  })
  .then( (data) => {
      console.log(data);
  })
  .catch(function (error) {
      console.log(error);
  }); 


}



export default App