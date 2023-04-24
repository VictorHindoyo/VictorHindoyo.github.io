import React, { useState, useEffect } from "react";

export default function Sempoa() {
  return (
    <>
      <div className="flex items-center bg-yellow-200 gap-2">
        <Kolom></Kolom>
      </div>
    </>
  );
}

export function Counter(props) {
  return (
    <span className="font-inter font-bold text-4xl">{props.children}</span>
  );
}

export function ResetSempoa() {
  return (
    <button className="bg-red-600 text-white text-xl py-2 px-8 rounded-lg font-bold">
      RESET
    </button>
  );
}

function Batu(props) {
  var className = "";
  if (props.isActive) {
    className =
      "w-14 h-8 bg-pink-200 rounded-lg transition duration-300 " +
      props.direction +
      "translate-y-3";
  } else {
    className = "w-14 h-8 bg-pink-200 rounded-lg transition duration-300";
  }
  function handleActive() {
    props.onCheck(!props.isActive);
  }

  return (
    <>
      <div
        className={className}
        onClick={() => {
          handleActive();
        }}
      ></div>
    </>
  );
}

function Kolom() {
  const [activeBatuAtas, setActiveBatuAtas] = useState(false);
  const [activeBatuBawah1, setActiveBatuBawah1] = useState(false);
  const [activeBatuBawah2, setActiveBatuBawah2] = useState(false);
  const [activeBatuBawah3, setActiveBatuBawah3] = useState(false);
  const [activeBatuBawah4, setActiveBatuBawah4] = useState(false);

  useEffect(() => {
    if (activeBatuBawah2) {
      setActiveBatuBawah1(true);
    }
  });

  return (
    <>
      <div className="flex flex-col gap-8">
        <Batu
          isActive={activeBatuAtas}
          direction={""}
          value={5}
          onCheck={setActiveBatuAtas}
        ></Batu>
        <div className="w-full bg-black h-2"></div>
        <div className="flex flex-col gap-3">
          <Batu
            isActive={activeBatuBawah1}
            direction={"-"}
            value={1}
            onCheck={setActiveBatuBawah1}
          ></Batu>
          <Batu
            isActive={activeBatuBawah2}
            direction={"-"}
            value={2}
            onCheck={setActiveBatuBawah2}
          ></Batu>
          <Batu
            isActive={activeBatuBawah3}
            direction={"-"}
            value={3}
            onCheck={setActiveBatuBawah3}
          ></Batu>
          <Batu
            isActive={activeBatuBawah4}
            direction={"-"}
            value={4}
            onCheck={setActiveBatuBawah4}
          ></Batu>
        </div>
      </div>
    </>
  );
}
