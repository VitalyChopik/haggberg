function caseFunc(blocks) {
  blocks.forEach(block => {
    const boxs = block.querySelectorAll('.case__box');
    if (boxs.length % 2 !== 0) {
      boxs[boxs.length - 1].classList.add('full-width');
    }
  })

}
export default caseFunc;