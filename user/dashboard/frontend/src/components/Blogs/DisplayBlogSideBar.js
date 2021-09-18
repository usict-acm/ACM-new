import React from 'react';
import { formatDate } from "utils/commonFunctions";


export default function DisplayBlogSideBar(props){
    return(
        <>
         <div>
         <h3>Blog Info</h3>
         </div>
         <hr />
         <div>
             <h4>All Tags</h4>
             <div>
                {
                props.blog?.tags.map((item)=>{
                return (
                <div className="tag_style px-2">
                    {item}
                </div>
                );})
                }
             </div>
             <hr />
             <div>
                <p><h3>Published On:</h3>{formatDate(props.blog?.published)}</p>
                <p><h3>Created On:</h3>{formatDate(props.blog?.created)}</p>
             </div>  

         </div>
        </>
    );


}