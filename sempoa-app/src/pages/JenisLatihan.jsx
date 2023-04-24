import React from "react";
import { SubTitle, Title } from "../components/Text";
import { WideButton } from "../components/Button";
import {
  FaDivide,
  FaPlus,
  FaMinus,
  FaTimes,
  FaAngleLeft,
} from "react-icons/fa";
import { BsGearFill } from "react-icons/bs";

export default function JenisLatihan() {
  return (
    <>
      <div className="bg-orange-100 w-screen h-screen py-8">
        <div className="flex justify-between items-center px-6">
          <a href="/">
            <FaAngleLeft size="30px"></FaAngleLeft>
          </a>
          <Title>Pilih Jenis Latihan</Title>
          <button><BsGearFill size="30px"></BsGearFill></button>
        </div>
        <div className="grid grid-cols-2 w-1/2 mx-auto gap-6 mt-[7.5vh]">
          <WideButton>
            <div className="bg-orange-400 rounded-full p-[0.8vh]">
              <FaPlus size={"25px"} color="white"></FaPlus>
            </div>
            <p>Penjumlahan</p>
          </WideButton>
          <WideButton route="/jenis">
            <div className="bg-blue-400 rounded-full p-[0.8vh]">
              <FaMinus size={"25px"} color="white"></FaMinus>
            </div>
            <p>Pengurangan</p>
          </WideButton>
          <WideButton>
            <div className="bg-pink-400 rounded-full p-[0.8vh]">
              <FaTimes size={"25px"} color="white"></FaTimes>
            </div>
            <p>Perkalian</p>
          </WideButton>
          <WideButton>
            <div className="bg-lime-400 rounded-full p-[0.8vh]">
              <FaDivide size={"25px"} color="white"></FaDivide>
            </div>
            <p>Pembagian</p>
          </WideButton>
        </div>
      </div>
    </>
  );
}
