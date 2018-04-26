import React, {Component} from 'react';
import './App.css';
import $ from 'jquery';
import Header from './Components/Header';
import About from './Components/About';
import Resume from './Components/Resume';
import Portfolio from './Components/Portfolio';
import Testimonials from './Components/Testimonials';
import Contact from './Components/Contact';
import Footer from './Components/Footer';

class App extends Component {
    constructor(props) {
        super(props);
        this.state = {
            foo: 'bar',
            resumeData: {}
        }
    }

    getResumeData() {
        $.ajax({
            url: '/resumeData.json',
            dataType: 'json',
            cache: false,
            success: function (data) {
                this.setState({resumeData: data});
            }.bind(this),
            error: function (xhr, status, err) {
            }
        });
    }

    componentDidMount() {
        this.getResumeData();
    }

    render() {
        if (this.state.resumeData !== undefined) {
            var mainDesc   = this.state.resumeData.main;
            var resumeDesc = this.state.resumeData.resume;
            var portfolio  = this.state.resumeData.portfolio;
        }
        return (
            <div className="App">
                <Header data={mainDesc}/>
                <About data={mainDesc}/>
                <Resume data={resumeDesc}/>
                <Portfolio data={portfolio}/>
                <Testimonials/>
                {/*<Contact/>*/}
                <Footer/>
            </div>
        );
    }
}

export default App;
