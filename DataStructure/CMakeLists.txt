cmake_minimum_required(VERSION 3.3)
project(DataStructure)

set(CMAKE_CXX_FLAGS "${CMAKE_CXX_FLAGS} -std=c++11")

set(SOURCE_FILES
    Arrays/1-arrays-ds.cpp
    Arrays/2-2d-array.cpp
    Arrays/3-dynamic-array.cpp
    LinkedLists/1-print-the-elements-of-a-linked-list.cpp
    LinkedLists/2-insert-a-node-at-the-tail-of-a-linked-list.cpp
    LinkedLists/3-insert-a-node-at-the-head-of-a-linked-list.cpp
    LinkedLists/4-insert-a-node-at-a-specific-position-in-a-linked-list.cpp)

add_executable(DataStructure ${SOURCE_FILES})