import React, { useState, useEffect } from "react";

// import { Nav , InputGroup,FormControl,Accordion} from 'react-bootstrap';
import { Container, Collapse, Button, CardBody, Card, Input } from 'reactstrap';
import "../../assets/css/CreateBlog.css"
// import Example from "./Example";

const SideNav = () =>
{
    var today = new Date(),
        date = today.toDateString();

    const [item, setItem] = useState("");
    const [array, setArray] = useState([]);

    const addTags = () =>
    {
        setArray((prev) =>
        {
            if (item.length < 1)
            {
                return [...prev];
            }
            else
                return [...prev, item];
        });

        setItem("");
    }

    const removeTags = (i) =>
    {
        const filteredArray = array.filter((item, index) =>
        {
            return index !== i;
        });
        console.log(filteredArray);
        setArray(filteredArray);
    }

    return (
        <>
            <div className="top_section">
                <h3>Post Settings</h3>
            </div>
            <hr />
            <div>
                <h4>Tags</h4>
                <Input type="text" placeholder="Enter one at a time" value={item} onChange={(e) => setItem(e.target.value)}></Input>
                <Button color="info" className="mt-3 mb-2" onClick={addTags}>Add</Button>
            </div>
            <div>
                {
                    array.map((tags, i) =>
                    {
                        return (
                            <div key={i} className='tag_style'><span className="ni ni-fat-remove " style={{cursor : "pointer"}} onClick={() => removeTags(i)}></span>&nbsp;{tags}</div>
                        )
                    })
                }
            </div>
            <hr />
            <div>
                <h4>Published Date : </h4>
                <p>{date}</p>
            </div>

        </>

    );

}

export default SideNav;
