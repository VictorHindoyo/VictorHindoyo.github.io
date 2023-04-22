import React from "react";

export function Title(props){
    return <h1 className="font-ribeye text-[4vw] text-center">
        {props.children}
    </h1>;
}

export function SubTitle(props){
    return <h2 className="font-ribeye text-[2.5vw] text-center">
        {props.children}
    </h2>
}