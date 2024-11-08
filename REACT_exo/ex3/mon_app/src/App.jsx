import {React, useState, useEffect} from 'react';
import DataTable from "react-data-table-component";

import './App.css'

const App = () => {

    const columns = [
        {
          name: <b>Nom</b>,
          selector: (row) => row.nom,
          sortable: true,
        },
        {
          name: <b>Prenom</b>,
          selector: (row) => row.prenom,
          sortable: true,
        },
        {
          name: <b>Ville</b>,
          selector: (row) => row.ville,
          sortable: true,
        }
      ];

      const [data, setData] = useState([
        { nom: "Booth", prenom: "Cliff", ville: "Hollywood" },
        { nom: "Lebowski", prenom: "Jeff", ville: "Los Angeles" },
        { nom: "Vega", prenom: "Vincent", ville: "Los Angeles" },
        { nom: "Kiddo", prenom: "Beatrix", ville: "El Paso" },
      ]);

      useEffect(() => {
        console.log("useEffect 1 ...")
      }, []);


      <DataTable
      columns={columns}
      data={data}
      defaultSortFieldId={1}
      />
}



export default App