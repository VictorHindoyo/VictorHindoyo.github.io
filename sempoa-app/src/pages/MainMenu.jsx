import React from "react";
import { SubTitle, Title } from "../components/Text";
import { WideButton } from "../components/Button";
import { FaPlane,FaTasks,FaGraduationCap,FaQuestionCircle } from "react-icons/fa";

export default function MainMenu() {
  return (
    <>
      <div className="bg-orange-100 w-screen h-screen py-4">
        <div className="flex justify-center px-6">
          <div>
            <Title>Game Cerdas Sempoa</Title>
            <SubTitle>Kapan Lagi Belajar itu Mudah</SubTitle>
          </div>
        </div>
        <div className="grid grid-cols-2 w-1/2 mx-auto gap-6 mt-[7.5vh]">
          <WideButton route="/bebas">
            <FaPlane size={'25px'}></FaPlane>
            <p>Mode Bebas</p>
          </WideButton>
          <WideButton route="/jenis">
           <FaTasks size={'25px'}></FaTasks>
            <p>Latihan</p>
          </WideButton>
          <WideButton>
            <FaGraduationCap size={'25px'}></FaGraduationCap>
            <p>Tes</p>
          </WideButton>
          <WideButton>
            <FaQuestionCircle size={'25px'}></FaQuestionCircle>
            <p>Tutorial</p>
          </WideButton>
        </div>
      </div>
    </>
  );
}
