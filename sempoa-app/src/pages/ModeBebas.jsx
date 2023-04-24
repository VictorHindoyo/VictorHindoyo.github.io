import React, { useState } from "react";
import Sempoa, { Counter, ResetSempoa } from "../components/Sempoa";
import { Title } from "../components/Text";
import { FaHome } from "react-icons/fa";

export default function ModeBebas() {
  const [count, setCount] = useState(0);
  return (
    <>
      <div className="w-screen h-screen bg-orange-100 py-6">
        <div className="flex justify-between px-6 items-center">
          <a href="/">
            <FaHome size={"30px"}></FaHome>
          </a>
          <Counter>{count}</Counter>
          <ResetSempoa></ResetSempoa>
        </div>
        <div className="w-11/12 mx-auto mt-6">
          <Sempoa></Sempoa>
        </div>
      </div>
    </>
  );
}
