import Blog from "./componentes/Blog";
import ExploreByColors from "./componentes/ExploreByColors";
import Footer from "./componentes/Footer";
import HeroSection from "./componentes/HeroSection";
import NavBar from "./componentes/NavBar";
import Services from "./componentes/Services";
import Testimonio from "./componentes/Testimonio";
import Trending from "./componentes/Trending";

const Home = () => {
    return (
        <>
            <NavBar />
            <HeroSection />
            <Trending />
            <ExploreByColors />
            <Testimonio />
            <Services />
            <Blog />
            <Footer />
        </>
    );
};

export default Home;