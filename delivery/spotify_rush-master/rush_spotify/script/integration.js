/*
$.ajax({
    type: 'GET',
    url: 'api.php',
    success: function(val){
        console.log(val);
        $('#top').html(val);
    }
})*/

//const element = React.createElement;

/*class Demo extends React.Component {
state = { 
    data: {},
};

compenentDidMount() {*/
const Demo = () => {
    const [data, setData] = useState({});
    useEffect(() => {
    axios.get('api.php').then(result => {
        console.log(result.data);
        setState(result.data);
        //return result.data
        //document.getElementById('top').innerHTML = result.data[0]
        //const source_a = resp.data;
        //$('#top').html(resp.data)
        //this.setState({
            //React.createElement('div', {className: 'listing_album'}, 'yes')
        //})
    });
}, []);
};
/*render() {
    const posts = this.state.posts.map( post => {
        return 'yes';
    });
   return 'no';
}*/
//}
//ReactDOM.render(source_a, document.getElementById('top'));
/*
const ListingAlbum = React.createElement('div', {className: 'listing_album'}, 'yes');
ReactDOM.render(ListingAlbum, document.getElementById('top'));*/