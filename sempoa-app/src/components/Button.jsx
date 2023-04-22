import React from "react";

export function WideButton(props) {
  return <>
     <a href={props.route} className="flex flex-col justify-center items-center bg-white shadow-[4.0px_8.0px_8.0px_rgba(0,0,0,0.38)] py-[4.5vh] rounded-xl font-bold gap-2 font-inter">
        {props.children}
     </a>

  </>;
}
