import React, { useState, Component } from 'react';
import { Nav } from 'reactstrap';
import Styles from './TopNavBar.module.css'
import Routes from './ResponsiveRoutes'



class TopNavBar extends Component {
  state = { clicked: false}

  handleClick = () => {
    this.setState({clicked : !this.state.clicked })

  }



  render() {
    return (
      <nav className={Styles.NavBarItems}>
        <div className={Styles.menuIcon} onClick={this.handleClick}>
           <div className={Styles.BarsIcon}><i className={this.state.clicked ? 'fas fa-times' : 'fas fa-bars'}></i></div>
        </div>
        <ul className={this.state.clicked ? [Styles.NavMenuActive] : [Styles.NavMenu]}>
          {Routes.map((item,index)=> {
              return (
                <li key={index}><a  href={item.path}>
                    {item.name}
                    
                    </a>
                    
                </li>
              );
          })}


          
        </ul>
      </nav>
    );
  }
}

export default TopNavBar