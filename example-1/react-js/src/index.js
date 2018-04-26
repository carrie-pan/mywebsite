// import _ from 'lodash';
// import printMe from './print.js';
// import '../components/my-component/style.css';
// import Icon from '../components/my-component/icon.png';
// import Data from '../components/my-component/data.xml';

    async function getComponent() {
       var element = document.createElement('div');
       const _ = await import(/* webpackChunkName: "lodash" */ 'lodash');
       element.innerHTML = _.join(['Hello', 'webpack'], ' ');
       return element;
    }

getComponent().then(component => {
    document.body.appendChild(component);
})