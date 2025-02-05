import { Link } from 'react-router-dom';

const NavBar = () => {
    return (
        <nav className="flex justify-between items-center p-4 bg-white shadow-md">
            <Link to="/" className="text-xl font-bold">E-COMMERCE</Link>
            <ul className="flex gap-4">
                <li><Link to="/about">About</Link></li>
                <li><Link to="/contact">Contact</Link></li>
            </ul>
        </nav>
    );
};

export default NavBar;