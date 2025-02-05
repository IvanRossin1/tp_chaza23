import { trendingShoes } from "../assets/data";

const Trending = () => {
    return (
        <section className="p-10">
            <h2 className="text-2x1 font-bold mb-4">Trending</h2>
            <div className="grid grid-cols-2 md:grid-cols-3 gap-4">
                {trendingShoes.map((shoe) => (
                    <div key={shoe.id} className="border p-4 rounded shadow-md">
                        <img src={shoe.img} alt={shoe.name} className="w-full h-40 object-cover" />
                        <h3 className="mt-2">{shoe.name}</h3>
                        <p className="text-gray-500">{shoe.price}</p>
                    </div>
                ))}
            </div>
        </section>
    );
};

export default Trending;