/*CREATION DU MENU*/
const MenuUl = React.createElement('ul', {},
[
    React.createElement('li', {}, 'Acceuil',
        React.createElement('a', {href: 'index.php'})
    ),
    React.createElement('li', {}, 'Recherche',
        React.createElement('a', {href: 'recherche.php'})
    ),
    React.createElement('li', {}, 'Artiste',
        React.createElement('a', {href: 'listing_artiste.php'})
    ),
    React.createElement('li', {}, 'Album',
        React.createElement('a', {href: 'listing_album.php'})
    ),
    React.createElement('li', {}, 'Genre',
        React.createElement('a', {href: 'listing_genre.php'})
    )
]
);
/*OU ON VEUT L'AJOUTER*/
ReactDOM.render(MenuUl, document.getElementById('menu_js'));

/*INTEGRATION*/




/*const element = React.createElement;
class Menu extends React.Component {
  render() {
    return element('ul',null,'Hello World!');
  }
}
const domContainer = document.querySelector('#menu_js');
ReactDOM.render(element(Menu), domContainer);*/

/*JAVASCRIPT EN MODE STRICT, TOUTES LES VARIABLES DOIVENT ETRE DECLAREES*/
//'use strict';
/*DECLARATIONDE DES VARIABLES*/
//const element = React.createElement;
/*CREATION DE LA CLASSE*/
//class Menu extends React.Component {
/*LE PROPS EST UN PARAMETRE*/
    //constructor(props) {
        //super(props);
        /*LE STATE EST UN ETAT LOCAL, PAR DEFAUT*/
        //this.state = { liked: false };
    //}
    // /state = {};
    //handleItemClick = (e, { name }) => this.setState({ activeItem: name });
    /*RENDER POUR CHAQUE MODIFICATION*/
    //render() {
        //if (this.state.liked) {
                //return <h1>Hello World!</h1>
        //}
        //const { activeItem } = this.state;
        //return element(
            //'button',
            //{
               //<ul></ul>
                /*SETSTATE MET A JOUR L'ETAT PAR DEFAUT*/  
                //onClick: () => this.setState({ 
                    //liked: true
                //}) 
            //},
        //'Like'
        //);
        //<div id="menu">
                /*<ul>
                    <li><a href="recherche.php">Recherche</a></li>
                    <li><a href="listing_artiste.php">Artistes</a></li>
                    <li><a href="listing_album.php">Albums</a></li>
                    <li><a href="listing_genre.php">Genres</a></li>
                </ul>*/
            //</div>
        
    //}
//}
/*TROUVER L'ELEMENT DU DOM*/
//const domContainer = document.querySelector('#menu_js');
/*PASSER LA FONCTION A L'ELEMENT HTML*/
//ReactDOM.render(element(Menu), domContainer);
