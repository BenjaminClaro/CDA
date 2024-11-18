import './App.css'
import { Routes, Route, Outlet, Link } from "react-router-dom";

function App() {
    return (
        <Routes>
            <Route path="/" element={<Menu />}>
                <Route path="list" element={<List />} />
                <Route path="form" element={<Form />} />
            </Route>
        </Routes>
    );
}

function Menu() {
    return (
        <div>

            <nav>
                <Link to="/">Home</Link>
                <Link to="/about">About</Link>
            </nav>

            <hr />

            <Outlet />
    </div>
  );
}


export default App
